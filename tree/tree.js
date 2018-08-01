var json = [
  {
  "name": "Top Level",
  "parent": "null",
  "children": [
    {
      "name": "Level 2: A",
      "parent": "Top Level",
      "children": [
        {
          "name": "Son of A",
          "parent": "Level 2: A"
        },
        {
          "name": "Daughter of A",
          "parent": "Level 2: A"
        }
      ]
    },
    {
      "name": "Level 2: B",
      "parent": "Top Level",
	  "children": [
        {
          "name": "Son of B",
          "parent": "Level 2: B"
        },
        {
          "name": "Daughter of B",
          "parent": "Level 2: B"
        }
		  ]
    }
  ]
}
];


var margin = {top: 120, right: 20, bottom: 120, left: 20},
    width = 1200 - margin.right - margin.left,
    height = 1200 - margin.top - margin.bottom;
    
var i = 0,
    duration = 750,
    root;
 
var tree = d3.layout.tree()
    .size([height, width]);
 
var diagonal = d3.svg.diagonal()
    .projection(function(d) { return [d.x, d.y]; });
//	.attr("fill","none")
//	.attr("stroke","black")
//	.attr("stroke-width","3");
 
var svg = d3.select("#tree-chart").append("svg")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.top + "," + margin.left + ")");
 

  root = json[0];
  root.x0 = height / 2;
  root.y0 = 0;
 
//  function collapse(d) {
//    if (d.children) {
//      d._children = d.children;
//      d._children.forEach(collapse);
//      d.children = null;
//    }
//  }
 
//  root.children.forEach(collapse);
  update(root);
 
 
d3.select(self.frameElement).style("height", "1000px");
 
function update(source) {
 
  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
      links = tree.links(nodes);
 
  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = d.depth * 180; });
 
  // Update the nodes…
  var node = svg.selectAll("g.node")
      .data(nodes, function(d) { return d.id || (d.id = ++i); });
 
  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + source.x0 + "," + source.y0 + ")"; })
      .on("click", click);
 
  nodeEnter.append("circle")
      .attr("r", 1e-6)
      .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });
 
  nodeEnter.append("text")
      .attr("x", function(d) { return d.children || d._children ? -10 : 10; })
      .attr("dy", ".35em")
      .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
      .text(function(d) { return d.name; })
      .style("fill-opacity", 1e-6);
 
  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });
 
  nodeUpdate.select("circle")
      .attr("r", 4.5)
      .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });
 
  nodeUpdate.select("text")
      .style("fill-opacity", 1);
 
  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + source.x + "," + source.y + ")"; })
      .remove();
 
  nodeExit.select("circle")
      .attr("r", 1e-6);
 
  nodeExit.select("text")
      .style("fill-opacity", 1e-6);
 
  // Update the links…
  var link = svg.selectAll("path.link")
      .data(links, function(d) { return d.target.id; })
  	.attr("fill","none")
	.attr("stroke","steelblue")
	.attr("stroke-width","3");
  
 
  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
      .attr("class", "link")
      .attr("d", function(d) {
        var o = {x: source.x0, y: source.y0};
        return diagonal({source: o, target: o});
      })
	.attr("fill","none")
	.attr("stroke","steelblue")
	.attr("stroke-width","3");
 
  // Transition links to their new position.
  link.transition()
      .duration(duration)
      .attr("d", diagonal).attr("fill","none")
	.attr("stroke","steelblue")
	.attr("stroke-width","3");
 
  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
      .duration(duration)
      .attr("d", function(d) {
        var o = {x: source.x, y: source.y};
        return diagonal({source: o, target: o});
      })
      .remove().attr("fill","none")
	.attr("stroke","steelblue")
	.attr("stroke-width","3");
 
  // Stash the old positions for transition.
  nodes.forEach(function(d) {
    d.x0 = d.x;
    d.y0 = d.y;
  });
}
 
// Toggle children on click.
function click(d) {
  if (d.children) {
    d._children = d.children;
    d.children = null;
  } else {
    d.children = d._children;
    d._children = null;
  }
  update(d);
}

console.log(svg);