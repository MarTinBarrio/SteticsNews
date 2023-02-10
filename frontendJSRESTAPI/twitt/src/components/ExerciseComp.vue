<template>

    <div class="container w-75 p-3">
        <h2>Test Técnico FULL-STACK</h2>
        <br>
        <div>
            <h4>Objetivo</h4>
            <p class="text-left">
                Hay numerosos sitios de noticias de la industria que informan sobre cosas importantes que
                suceden. en todo el mercado. Estos sitios son propiedad de compañías que emplean
                grandes equipos de escritores para producir toneladas de contenido a diario. Sin embargo,
                por lo general estamos interesados sólo en el pieza única de información oculta dentro de
                varios párrafos de texto. Esa información generalmente se escribe en una sola oración. Nos
                gustaría crear una fuente de noticias "similar a Twitter", que mostrará las noticias más
                importantes del mercado. Cada publicación estará limitada a 255 caracteres y contendrá la
                información más importante. Los usuarios son capaces de ver el historial de publicaciones,
                buscar a través de ellas y hacer clic para obtener detalles.
            </p>
            <p>
                Publicación de ejemplo: "Nueva adquisición: SteticABC acaba de anunciar un acuerdo para
                comprar SteticDEF con el objetivo de aumentar su presencia en el mercado alemán. El
                acuerdo se estima en alrededor de 2 millones de euros Lea más en SteticNews o
                NewsDaily”. El contenido será gestionado por nosotros mismos. Cada publicación tendrá la
                posibilidad de mostrar una o más enlaces para los artículos completos en sitios de noticias
                externos. Si la empresa mencionada en la publicación tiene una página web, habrá una
                opción para "etiquetar/agregar referencia" a esa empresa por lo que se puede hacer clic en
                el nombre de la empresa para acceder a su website. Las publicaciones se adjuntarán a una
                categoría (p. Lanzamientos de productos, cooperaciones, etc.). Opcionalmente, las
                publicaciones se pueden adjuntar a una región relacionada (por ejemplo, país) que se
                mostrará sólo a título informativo. Ver más dentro de la estructura abajo
            </p>
        </div>
        <hr>
        <div>
            <h4>
                Recursos
            </h4>
            <p>
                Cada publicación debe tener (al menos) los siguientes atributos:
            <p> - Contenido (texto, máximo 255 caracteres) </p>
            <p> - Hora (cuando fue publicado)</p>
            <p> - Etiquetas (opcionales e invisibles, rellenadas manualmente, utilizadas para refinar la búsqueda)</p>
            </p>
            <p>
                <br>
                <br>
                Las publicaciones tendrán una relación con estos recursos particulares:
            <p> - Enlace externo (una publicación puede tener referencia a 0 o más enlaces)</p>
            <p> - Categoría de publicación (una publicación siempre pertenece a una categoría)</p>
            <p> - Región de publicación (una publicación puede pertenecer opcionalmente a una región)</p>
            </p>
            <p>
                Bases de tecnología y entregables
                <p> - Base de datos relacional con claves foráneas (mysql o postgres)</p>
                <p> - PHP en el Backend (Framework a elección)</p>
                <p> - Vuejs en el Frontend (Frameworks de Vue a elección.)</p>
                <p> - Repositorio de Git con el código fuente y los diferentes commits.</p>
                <p> - API REST.</p>
            </p>
            <p> Gracias por el tiempo de esta prueba. </p>
        </div>
        <img src="../assets/img.exerc.1.png"/>
        <img src="../assets/img.exerc.2.png"/>
        <img src="../assets/img.exerc.3.png"/>
        


    </div>

</template>