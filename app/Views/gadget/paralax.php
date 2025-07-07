<?= $this->section('content') ?>

<!-- Seção com efeito parallax -->
<div class="parallax d-flex align-items-center justify-content-center text-center">
    <div class="p-5 ms-5 mb-5">
        <?php echo view('gadget/logo'); ?>
    </div>
</div>

<!-- Conteúdo normal -->
<section class="container py-5">
    <h2>Sobre o Projeto</h2>
    <p>O Observatório Inteligente da Sociobiodiversidade (OBIS) da bacia hidrográfica do Rio Doce é uma iniciativa voltada para o monitoramento, análise e valorização da diversidade biológica, cultural e socioeconômica presente em uma das mais importantes bacias hidrográficas do Sudeste brasileiro. O OBIS tem como missão integrar dados, conhecimentos e saberes locais por meio de tecnologias digitais e abordagens interdisciplinares, promovendo a gestão participativa, a sustentabilidade e a justiça ambiental na região.</p>
    <p>A bacia do Rio Doce abrange uma vasta área que atravessa os estados de Minas Gerais e Espírito Santo, reunindo ecossistemas diversos e comunidades que dependem diretamente dos recursos naturais para sua subsistência e identidade cultural. Diante dos impactos socioambientais históricos e recentes – como o rompimento de barragens e a degradação ambiental – o OBIS surge como um espaço estratégico para o fortalecimento da governança ambiental e da reconstrução social e ecológica da bacia.</p>
    <p>Utilizando tecnologias de informação, geoprocessamento e inteligência artificial, o observatório coleta, organiza e disponibiliza dados sobre a biodiversidade, os modos de vida tradicionais, os usos da terra, os conflitos socioambientais e as iniciativas de conservação e restauração. Além disso, o OBIS busca articular instituições acadêmicas, órgãos públicos, organizações da sociedade civil e comunidades locais na construção de um conhecimento compartilhado, colaborativo e transformador.</p>
    <p>Ao valorizar a sociobiodiversidade da bacia do Rio Doce, o OBIS pretende não apenas ampliar a visibilidade das riquezas naturais e culturais da região, mas também contribuir para políticas públicas mais inclusivas, informadas e orientadas pela justiça social e ambiental.</p>
</section>

<!-- Outra seção com parallax -->
<div class="parallax-2 d-flex align-items-center justify-content-center text-white text-center">
    <div>
        <img src="<?= base_url('assets/img/maps/maps_bacia.png') ?>" alt="Logo" height="620">
    </div>
</div>

<section class="container py-5">

    <h2>Informações Disponibilizadas pelo OBIS e sua Razão de Existência</h2>
    <p>O Observatório Inteligente da Sociobiodiversidade (OBIS) da Bacia do Rio Doce foi concebido como uma plataforma aberta e interativa para reunir, organizar e disponibilizar diferentes camadas de informação sobre a realidade socioambiental da região. Sua existência responde à necessidade de dar visibilidade e acesso público ao conhecimento gerado por diversos atores — comunidades locais, pesquisadores, organizações da sociedade civil e instituições públicas — contribuindo para uma compreensão mais ampla e integrada da bacia.</p>

    <p>Tipos de informações disponibilizadas:
    <ul>
        <li><b>Informações sobre a Bacia Hidrográfica</b>
            O OBIS reúne dados geográficos, cartográficos e ambientais que caracterizam a bacia do Rio Doce, incluindo mapas temáticos, delimitações territoriais, informações sobre os recursos hídricos, cobertura vegetal, áreas protegidas, uso do solo e indicadores de qualidade ambiental. Essas informações são fundamentais para subsidiar diagnósticos, planos de manejo, políticas públicas e ações de restauração.
        </li>

        <li><b>Projetos de Ciência Cidadã e Iniciativas Comunitárias</b>
            O Observatório valoriza e divulga experiências protagonizadas por comunidades, coletivos e movimentos sociais que atuam na defesa dos territórios, na preservação ambiental e na promoção da sociobiodiversidade. São apresentados projetos de ciência cidadã, ações de monitoramento popular da água, hortas agroecológicas, práticas de etnoconhecimento e outras formas de produção de saberes locais.
        </li>

        <li><b>Dados de Pesquisa Científica</b>
            A plataforma agrega dados produzidos por instituições de ensino e pesquisa sobre a biodiversidade, o meio ambiente, a saúde, a educação e a economia da região. Esses dados podem incluir séries históricas, banco de dados, relatórios técnicos, levantamentos de campo e indicadores que ajudam a compreender os impactos ambientais e as possibilidades de desenvolvimento sustentável.
        </li>

        <li><b>Trabalhos Acadêmicos sobre a Bacia do Rio Doce</b>
            O OBIS também funciona como repositório de publicações acadêmicas — como dissertações, teses, artigos científicos e trabalhos de conclusão de curso — que tratam de temas relacionados à Bacia do Rio Doce. Esses trabalhos são organizados por área temática e instituição de origem, facilitando o acesso ao conhecimento produzido sobre o território.
        </li>
    </ul>
    </p>

    Razão de Existência
    A criação do OBIS se justifica pela urgência de articular diferentes fontes de informação e promover uma governança mais transparente, participativa e informada sobre os desafios e potencialidades da Bacia do Rio Doce. Ao integrar dados técnicos, científicos e populares, o observatório contribui para:

    Fortalecer o controle social e a cidadania ambiental;

    Apoiar processos educativos e formativos sobre o território;

    Fomentar pesquisas aplicadas à realidade local;

    Incentivar políticas públicas sustentáveis e inclusivas;

    Dar visibilidade à diversidade biocultural da região.

    Mais do que um repositório de dados, o OBIS se apresenta como uma ferramenta estratégica para o enfrentamento dos impactos socioambientais e a construção coletiva de soluções baseadas na justiça social, no respeito aos saberes tradicionais e na valorização da vida em todas as suas formas.

</section>

<style>
    .parallax {
        background-image: url('<?= base_url('/assets/img/parallax/parallax_01.png'); ?>');
        /* substitua se quiser */
        height: auto;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .parallax-2 {
        background-image: url('<?= base_url('/assets/img/parallax/parallax_01.png'); ?>');
        height: 60vh;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>