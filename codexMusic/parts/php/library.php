 <section id="biblioteca">

   <div id="library" style="display: none;">

    <div class="col s12 m8 l9">
      <h4>Biblioteca</h4>

      <div class="content">

        <div id="filterdiv">
          <input id="filter" title="Filter library (F)" placeholder="Pesquisar..." onchange="filter()" onclick="this.select();setFocus(this)">
          <button class="filter" title="Apply filter (Enter)" onclick="filter()"></button>
          <button class="clear" title="Clear filter (Esc)" onclick="clearFilter()"></button>
        </div>
        <div id="tree" onclick="libClick(event)" oncontextmenu="libClick(event, true)"
        title="L: Open folder | Play/Enqueue song (Enter)&#xA;R: Enqueue folder | Play next (Shift-Enter)"></div>
      </div>
    </div>
  </div>

</section>
