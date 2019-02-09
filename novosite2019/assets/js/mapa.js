// *
// * Adicionar multiplos marcadores
// * 2013 - www.marnoto.com
// *

// Váriáveis necessárias
var map;
var infoWindow;
// A variável markersData guarda a informação necessária a cada marcador
// Para utilizar este código basta alterar a informação contida nesta variável
var markersData = [
//    {
//        lat: -7.1203597,
//        lng: -34.8389925,
//        nome: "João Pessoa - PB",
//        morada1: "Rua Deputado José Mariz, 1054, Tambauzinho",
//        morada2: "João Pessoa - PB",
//        // codPostal: "3830-772 Gafanha da Nazaré" // não colocar virgula no último item de cada maracdor
//    },
    {
        lat: -7.1463677,
        lng: -34.887245,
        nome: "Carajás Geisel",
        morada1: "R. Motorista Aldovandro Amâncio - Geisel",
        morada2: "João Pessoa - PB",
    },
    {
        lat: -7.052114,
        lng: -34.8537388,
        nome: "Carajás Intermares",
        morada1: "R. Mar do Caribe, s/n - Portal do Poço",
        morada2: "Cabedelo - PB",
    },
    {
        lat: -7.0672391,
        lng: -34.8421461,
        nome: "Unidade Bessa",
        morada1: "Av. Presidente Nilo Peçanha, 39 - Bessa",
        morada2: "João Pessoa - PB",
    },

    {
        lat: -7.0983739,
        lng: -34.8405081,
        nome: "Unidade Manaíra",
        morada1: "Rua. Reinaldo Tavares de Melo, 99 - Manaíra",
        morada2: "João Pessoa - PB",
    }
];
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(-7.2215308, -35.8992338),
        zoom: 10,
        mapTypeId: 'roadmap',
        //styles: styles
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    // cria a nova Info Window com referência à variável infowindow
    // o conteúdo da Info Window será atribuído mais tarde
    infoWindow = new google.maps.InfoWindow();
    // evento que fecha a infoWindow com click no mapa
    google.maps.event.addListener(map, 'click', function () {
        infoWindow.close();
    });
    // Chamada para a função que vai percorrer a informação
    // contida na variável markersData e criar os marcadores a mostrar no mapa
    displayMarkers();
}
google.maps.event.addDomListener(window, 'load', initialize);
// Esta função vai percorrer a informação contida na variável markersData
// e cria os marcadores através da função createMarker
function displayMarkers() {

    // esta variável vai definir a área de mapa a abranger e o nível do zoom
    // de acordo com as posições dos marcadores
    var bounds = new google.maps.LatLngBounds();
    // Loop que vai estruturar a informação contida em markersData
    // para que a função createMarker possa criar os marcadores 
    for (var i = 0; i < markersData.length; i++) {

        var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
        var nome = markersData[i].nome;
        var morada1 = markersData[i].morada1;
        var morada2 = markersData[i].morada2;
        var codPostal = markersData[i].codPostal;
        createMarker(latlng, nome, morada1, morada2, codPostal);
        // Os valores de latitude e longitude do marcador são adicionados à
        // variável bounds
        bounds.extend(latlng);
    }

    // Depois de criados todos os marcadores
    // a API através da sua função fitBounds vai redefinir o nível do zoom
    // e consequentemente a área do mapa abrangida.
    map.fitBounds(bounds);
}

// Função que cria os marcadores e define o conteúdo de cada Info Window.
function createMarker(latlng, nome, morada1, morada2, codPostal) {
    var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        title: nome
    });
    // Evento que dá instrução à API para estar alerta ao click no marcador.
    // Define o conteúdo e abre a Info Window.
    google.maps.event.addListener(marker, 'click', function () {

        // Variável que define a estrutura do HTML a inserir na Info Window.
        var iwContent = '<div id="iw_container">' +
                '<div class="iw_title">' + nome + '</div>' +
                '<div class="iw_content">' + morada1 + '<br />' +
                morada2 + '</div></div>';
        // O conteúdo da variável iwContent é inserido na Info Window.
        infoWindow.setContent(iwContent);
        // A Info Window é aberta.
        infoWindow.open(map, marker);
    });
}