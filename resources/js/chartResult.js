poll_chart();

function poll_chart() {
    const $chart = document.querySelector('#chart');
    const correct = $chart.dataset.correct;
    const discorrect = $chart.dataset.discorrect;
    const ctx = $chart.getContext('2d');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['正解','不正解'],
            datasets: [{
                data: [correct, discorrect],
                backgroundColor: [
                    '#4169e1',
                    '#fa8072'
                ]
            }]
        },
        option: {
            legend: {
                position: 'bottom',
                labels: {
                    fontSize: 18
                }
            }
        }
    })
}