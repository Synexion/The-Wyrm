let body = document.querySelector('body');

let open_overlay = document.getElementById('open_overlay');

let log = document.getElementById('overlay_log');

let sub = document.getElementById('overlay_sub');

// ---- OVERLAY CONNEXION / INSCRIPTION -----
// ---- OUVERTURE DE L'OVERLAY / LIEN NAV  ----

open_overlay.addEventListener('click', (e)=> {
    log.classList.remove('hidden');
    sub.classList.remove('hidden');
});

// --- FERMETURE DE L'OVERLAY ---

function close_overlays(e) {
  if(e.target === log || e.target === sub){
    log.classList.add('hidden');
    sub.classList.add('hidden');
  }
}

log.addEventListener('click', close_overlays);
sub.addEventListener('click', close_overlays);

// --- SELECTION INSCRIPTION ou CONNEXION ---

let log_choice = document.getElementById('log_choice');
let sub_choice = document.getElementById('sub_choice');

function log_link(e) {
  if(e.target === log_choice) {
    log.classList.add('hidden');
    sub.classList.remove('hidden');
  } else {
    sub.classList.add('hidden');
    log.classList.remove('hidden');
  }
}

function sub_link(e) {
  if(e.target === sub_choice) {
    sub.classList.add('hidden');
    log.classList.remove('hidden');
  } else {
    log.classList.add('hidden');
    sub.classList.remove('hidden');
  }
}

log_choice.addEventListener('click', log_link);
sub_choice.addEventListener('click', sub_link);

