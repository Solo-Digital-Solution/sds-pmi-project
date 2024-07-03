document.addEventListener("DOMContentLoaded", function() {
    var chart6 = c3.generate({
        bindto: '#barGraph',
        padding: {
            top: 0,
            left: 30,
            right: 20,
        },
        data: {
            columns: [
                ['personil', ...window.barData.map(item => item.personil)],
                ['tsr', ...window.barData.map(item => item.tsr)],
                ['tdb', ...window.barData.map(item => item.tdb)],
            ],
            type: 'bar',
            names: {
                personil: 'Personil',
                tsr: 'TSR',
                tdb: 'TDB'
            },
            colors: {
                personil: '#da1113',
                tsr: '#3c3c3c',
                tdb: '#007bff'
            },
        },
    });
});
