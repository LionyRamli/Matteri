<div class="container">
    @foreach($competenciesMaterials as $competenciesMaterial)
        <p>
            Kompetensi: {{ $competenciesMaterial->competence->kompetensi }} <br>
            Materi: {{ $competenciesMaterial->material->materi }}
        </p>
    @endforeach

    
</div> 
