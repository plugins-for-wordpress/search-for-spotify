<div id="kirilkirkov-spotify-search-container">
  <form class="spotify-search-form" action="" onsubmit="return false">
    <div class="inputs">
        <input type="text" placeholder="<?php esc_attr_e('Arists, songs, or playlists'); ?>" name="spotify_search_input" value="">
    </div>
    <button type="submit">
        <span class="ready">
          <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="25px" height="25px"><path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"/></svg>
        </span>
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </button>
    <a class="spotify-search-clear" href="javascript:;">
        <svg width="10px" height="10px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g data-name="Lager 20" transform="translate(-6 -6)"><path data-name="Path 23" d="M18.695,16l6.752-6.752a1.886,1.886,0,0,0,0-2.668l-.027-.027a1.886,1.886,0,0,0-2.668,0L16,13.305,9.248,6.553a1.886,1.886,0,0,0-2.668,0l-.027.027a1.886,1.886,0,0,0,0,2.668L13.305,16,6.553,22.752a1.886,1.886,0,0,0,0,2.668l.027.027a1.886,1.886,0,0,0,2.668,0L16,18.695l6.752,6.752a1.886,1.886,0,0,0,2.668,0l.027-.027a1.886,1.886,0,0,0,0-2.668Z" fill="#040505"/></g></svg>
    </a>
  </form>

  <div class="spotify-table-wrapper">
      <ul class="spotify-search-results"></ul>
  </div>
</div>

<?php 
$absolute_results = get_option($Config::INPUTS_PREFIX.'absolute_positioned_results');
// Backward compatibility: check old option name too
if ($absolute_results === false) {
    $absolute_results = get_option($Config::INPUTS_PREFIX.'spotify_search_absolute_results');
}
// Default to enabled if option doesn't exist
if ($absolute_results === false || trim($absolute_results) === '' || $absolute_results === '1') { 
?>
<style>
#kirilkirkov-spotify-search-container {
  position: relative !important;
  width: 100% !important;
  z-index: 1 !important;
  isolation: isolate !important;
}
#kirilkirkov-spotify-search-container .spotify-table-wrapper {
  position: absolute !important;
  top: 100% !important;
  left: 0 !important;
  right: 0 !important;
  overflow-y: auto !important;
  overflow-x: hidden !important;
  max-height: 500px !important;
  z-index: 9999999 !important;
  margin-top: 5px !important;
  margin-bottom: 0 !important;
  -webkit-box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5) !important; 
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5) !important;
  width: 100% !important;
  box-sizing: border-box !important;
  -webkit-overflow-scrolling: touch !important;
  will-change: scroll-position !important;
  display: none !important;
  pointer-events: auto !important;
  overscroll-behavior: contain !important;
  overscroll-behavior-y: contain !important;
  touch-action: pan-y !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper * {
  pointer-events: auto !important;
  position: relative !important;
  z-index: inherit !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper a {
  pointer-events: auto !important;
  cursor: pointer !important;
  z-index: 9999999 !important;
  position: relative !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper[style*="display: block"],
#kirilkirkov-spotify-search-container .spotify-table-wrapper[style*="display:flex"] {
  display: block !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper ul.spotify-search-results {
  max-height: none !important;
  overflow: visible !important;
  height: auto !important;
  display: block !important;
  position: relative !important;
  pointer-events: auto !important;
  z-index: inherit !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper ul li {
  overflow: visible !important;
  position: relative !important;
  pointer-events: auto !important;
  z-index: inherit !important;
}

#kirilkirkov-spotify-search-container .spotify-table-wrapper ul li a {
  pointer-events: auto !important;
  cursor: pointer !important;
  z-index: 9999999 !important;
  position: relative !important;
}

@media (max-width: 768px) {
  #kirilkirkov-spotify-search-container .spotify-table-wrapper {
    max-height: 400px !important;
  }
}

@media (max-width: 480px) {
  #kirilkirkov-spotify-search-container .spotify-table-wrapper {
    max-height: 350px !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
  }
}
</style>
<?php } ?>

<?php if(get_option($Config::INPUTS_PREFIX.'spotify_search_styles') && trim(get_option($Config::INPUTS_PREFIX.'spotify_search_styles')) != '') { ?>
<style>
  <?php echo get_option($Config::INPUTS_PREFIX.'spotify_search_styles'); ?>
</style>
<?php } ?>