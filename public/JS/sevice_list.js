window.onload = toggleServiceList();

function toggleServiceList() {
        if (document.documentElement.clientWidth >= '1024' && document.documentElement.clientWidth <= '1366') {
            document.getElementById("col3").style.display = "none";
            document.getElementById("col3_1").style.display = "block";
        }
}