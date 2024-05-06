// Line Graph
new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
        labels: [500,600,700,750,800,850,900,950,999,1050],
        datasets: [{ 
            data: [86,114,106,106,107,111,133,221,783,2478],
            label: "Boac",
            borderColor: "#3e95cd",
            fill: false
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Milk produced (liters)'
        },
        responsive: true,
        maintainAspectRatio: false
    }
});

// Bar Graph
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
        labels: ["Murrah", "Philippine", "Nelore", "Jafarabadi", "Pandharpuri"],
        datasets: [{
            label: "total",
            backgroundColor: ["#002768", "#002768","#002768","#002768","#002768"],
            data: [2478,5267,734,784,433]
        }]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Carabaos Breed'
        },
        responsive: true,
        maintainAspectRatio: false
    }
});

// Donut
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
        labels: ["Under-Observation", "Healthy", "Pregnant", "Unhealthy", "Dead"],
        datasets: [
            {
                label: "Status",
                backgroundColor: ["#8791E9", "#002768","#29387C","#4B60BD","#6BA1BD"],
                data: [2478, 5267, 734, 784, 433]
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Status of Carabaos'
        },
        responsive: true,
        maintainAspectRatio: false
    }
});