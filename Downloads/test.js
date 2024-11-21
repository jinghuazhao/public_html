// Sample genetic data for LocusZoom.js
var geneticData = {
    fields: ["position", "pvalue"],
    data: [
        { position: 100, pvalue: 1e-6 },
        { position: 200, pvalue: 1e-5 },
        { position: 300, pvalue: 1e-4 },
        // Add more data points as needed
    ]
};

// Sample annotations data for D3.js
var annotationsData = [
    { position: 120, label: "Gene A" },
    { position: 250, label: "Gene B" },
    // Add more annotation points as needed
];

// LocusZoom.js configuration
var plotConfig = {
    state: {
        chr: '1',
        start: 1,
        end: 500,
        width: 800
    },
    data_layers: [{
        id: 'genetic-data',
        fields: ['position', 'pvalue'],
        type: 'scatter',
        data: geneticData,
        x_axis: {
            field: 'position',
            label: 'Chromosome Position'
        },
        y_axis: {
            field: 'pvalue',
            label: 'P-Value',
            floor: 1e-7,
            ceiling: 1
        }
    }]
};

// Create the LocusZoom plot
var plot = LocusZoom.populate('#lz-plot', plotConfig);

// Use D3.js for additional customization (annotations)
var svg = d3.select("#lz-plot svg g");

svg.selectAll(".annotation")
    .data(annotationsData)
    .enter().append("text")
    .attr("class", "annotation")
    .attr("x", function(d) { return plot.x_scale(d.position); })
    .attr("y", 20) // Y-coordinate of the annotation text
    .text(function(d) { return d.label; });
