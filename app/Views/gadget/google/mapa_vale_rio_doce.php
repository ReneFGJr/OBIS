    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>

    <h2>Mapa com Dados Georreferenciados</h2>
    <div id="map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Dados GeoJSON em uma variável JavaScript
        const geoData = {
            "type": "FeatureCollection",
            "features": [{
                    "type": "Feature",
                    "properties": {
                        "nome": "Mariana, MG – rompimento da Barragem Fundão (novembro de 2015)"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-43.4425, -20.2314]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nome": "INMA - Instituto Nacional de Pesquisas da Mata Atlântica"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-40.6003, -19.9356]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nome": "Brumadinho, MG – rompimento da Barragem B1 da Mina do Córrego do Feijão (janeiro de 2019)"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-44.1308, -20.1414]
                    }
                }
            ]
        };

        // Criar o mapa centrado no Brasil
        var map = L.map('map').setView([-20.2350, -45.9253], 6);

        // Adicionar camada de mapa base
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Adicionar os dados ao mapa
        L.geoJSON(geoData, {
            onEachFeature: function(feature, layer) {
                if (feature.properties && feature.properties.nome) {
                    layer.bindPopup(feature.properties.nome);
                }
            }
        }).addTo(map);
    </script>
    <br />
    <br />