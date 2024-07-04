document.addEventListener('DOMContentLoaded', function() {
    const queryParams = new URLSearchParams(window.location.search);
    const total = queryParams.get('total')
    if (total) {
        document.getElementById('result').innerText = `Total Biaya Pengiriman: Rp. ${total}`;
    }
});
