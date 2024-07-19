//
// Get header and footer height
function getHeaderFooterHeight() {
	const header = document.querySelector("header").offsetHeight;
	const footer = document.querySelector("footer").offsetHeight;

	document.documentElement.style.setProperty("--header-height", `${header}px`);
	document.documentElement.style.setProperty("--footer-height", `${footer}px`);
}

window.addEventListener("DOMContentLoaded", getHeaderFooterHeight);
window.addEventListener("resize", () => {
	setTimeout(getHeaderFooterHeight, 500);
});
