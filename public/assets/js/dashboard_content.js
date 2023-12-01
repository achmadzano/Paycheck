
  // Define your chart data
  var data = [
    { x: "Finance", value: 10 },
    { x: "Marketing", value: 20 },
    { x: "IT", value: 30 },
    { x: "Accounting", value: 25 },
    { x: "HRD", value: 20 },
    { x: "Legal", value: 18 },
    { x: "Procurement", value: 25 },
    { x: "GA", value: 10 },
    { x: "PPIC", value: 21 },
    { x: "Production", value: 31 },
    { x: "QA", value: 10 },
    { x: "Creative", value: 19 },
  ];

  // Create a column chart instance
  var chart = anychart.column();

  // Set the chart data
  chart.data(data);

  // Set chart title
  chart.title("Employee Count by Department");

  // Set the container id for the chart
  chart.container("column-chart-container");

  chart.tooltip().format("Quantity: {%Value}");

  // Draw the chart
  chart.draw();

  var pieData = [
    { x: "Cowo", value: 400 },
    { x: "Cewe", value: 300 },
  ];

  // Create a pie chart instance
  var pieChart = anychart.pie();

  // Set the pie chart data
  pieChart.data(pieData);

  // Set pie chart title
  pieChart.title("Employee Composition");

  // Set the container id for the pie chart
  pieChart.container("pie-chart-container");

  // Draw the pie chart
  pieChart.draw();