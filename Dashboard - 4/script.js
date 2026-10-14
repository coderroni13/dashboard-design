const mainCtx = document.getElementById("mainChart").getContext("2d");
const orderCtx = document.getElementById("orderChart").getContext("2d");
const earningsCtx = document.getElementById("earningsChart").getContext("2d");

const commonOptions = {
  responsive: true,
  maintainAspectRatio: false,
  devicePixelRatio: 2,
  interaction: { mode: "index", intersect: false },
  plugins: {
    tooltip: { enabled: true, backgroundColor: "#1e293b", padding: 12 },
    legend: { display: false }
  }
};

new Chart(mainCtx, {
  type: "line",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    datasets: [{
      label: "Revenue",
      data: [1500, 2200, 1800, 2954, 2600, 3100],
      borderColor: "#6366f1",
      backgroundColor: "rgba(99, 102, 241, 0.1)",
      borderWidth: 2,
      tension: 0.4,
      fill: true,
      pointRadius: 4,
      pointBackgroundColor: "#ffffff",
      pointBorderColor: "#6366f1"
    }]
  },
  options: {
    ...commonOptions,
    scales: {
      y: { beginAtZero: true, grid: { color: "rgba(0, 0, 0, 0.05)" } },
      x: { grid: { display: false } }
    }
  }
});

new Chart(orderCtx, {
  type: "bar",
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
    datasets: [{
      data: [4200, 3800, 4800, 4100, 3700],
      backgroundColor: "#6366f1",
      borderRadius: 8
    }]
  },
  options: {
    ...commonOptions,
    scales: { y: { beginAtZero: true, grid: { color: "rgba(0, 0, 0, 0.05)" } } }
  }
});

new Chart(earningsCtx, {
  type: "doughnut",
  data: {
    labels: ["Completed", "Remaining"],
    datasets: [{
      data: [68, 32],
      backgroundColor: ["#6366f1", "#e5e7eb"],
      borderWidth: 0
    }]
  },
  options: { ...commonOptions, cutout: "80%" }
});