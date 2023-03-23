<div class="DisplayMainDiv">
  <div class="filters">
    <select name="filter1" class='filter' id='filter1'>
      <option value="alle">Alle</option>
      <option value="geschaeftsfuehrung:Geschäftsführung">Geschäftsführung</option>
      <option value="geschaeftsbereiche:Geschäftsbereiche">Geschäftsbereiche</option>
      <option value="niederlassungsleitung:Niederlassungsleitung">Niederlassungsleitung</option>
      <option value="verwaltung:Verwaltung & Organisation">Verwaltung & Organisation</option>
      <option value="beratung:Beratung & Research">Beratung & Research</option>
    </select>
    <select name="filter2" class='filter' id='filter2'>
      <option value="alle">Alle</option>
      <option value="immobilienwesen:Immobilienwesen">Immobilienwesen</option>
      <option value="bauwesen:Bauwesen">Bauwesen</option>
      <option value="finanzwesen:Finanzwesen">Finanzwesen</option>
      <option value="marketing:Marketing, Personalwesen & Administration">Marketing, Personalwesen & Administration</option>
      <option value="recht:Recht">Recht</option>
    </select>
    <select name="filter3" class='filter' id='filter3'>
      <option value="alle">Alle</option>
      <option value="berlin:Berlin">Berlin</option>
      <option value="stuttgart:Stuttgart">Stuttgart</option>
      <option value="duesseldorf:Düsseldorf">Düsseldorf</option>
      <option value="hamburg:Hamburg">Hamburg</option>
      <option value="muenchen:München">München</option>
      <option value="frankfurt:Frankfurt">Frankfurt</option>
    </select>
    <input type="text" name="searchDisplayName" id="searchDisplayName">
    <button name="searchDisplayBtn" id="searchDisplayBtn">Search</button>
  </div>

  <div class=".content-wrapper-displayUsers" id="mainDivDisplay">
  </div>
</div>

<script type="text/javascript">
  let users = '<?= json_encode($users) ?>';
</script>
