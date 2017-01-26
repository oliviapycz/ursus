
    <header class="flex">
  <figure class="inline">
    <img src="images/olivia.jpg" alt="photo olivia" class="img-circle" id="img-profile">
  </figure>

  <section>
    <h1>Olivia Peny-Coblentz</h1>
    <h2>Développeuse Web en devenir</h2>
  </section>

  <nav>
    <ul>
      <li class="inline navi">
        <a href="LAST.php"  <?php if ($current_file == "Home") { echo 'class="lu"';} ?> >Home</a>
      </li>

      <li class="inline navi">
        <a href="formationLAST.php"  <?php if ($current_file == "Formation") { echo 'class="lu"';} ?> >Formation</a>
      </li>

      <li class="inline navi">
        <a href="competencesLAST.html" class="info">Skills</a>
      </li>

      <li class="inline navi">
        <a href="languagesLAST.html" class="info">Languages</a>
      </li>
      <li class="inline navi">
        <a href="hobbiesLAST.html" class="info">Hobbies</a>
      </li>

    </ul>
  </nav>
  </header>
