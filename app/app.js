// JavaScript kód
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(';').shift();
}

function agreeCookie() {
  const consentDiv = document.getElementById('cookieConsent');
  consentDiv.style.display = 'none';
  document.cookie = 'cookieConsent=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
}

// Ak ešte nebola prijatá cookie, zobrazíme lištu
window.onload = function() {
  const consentCookie = getCookie('cookieConsent');
  if (!consentCookie) {
      const consentDiv = document.getElementById('cookieConsent');
      consentDiv.style.display = 'block';
  }
};


