


d3.csv("NodeInfo.csv",function(error,csvdata){
	if(error)
  {
   console.log(error);

 }
 else
 {
  console.log(csvdata);





//下面要把csvdata里的东西搞出来放到json数组里
//开始搞

//假设csvdata数组中是按照fatherID、ID由小到大排序
function data2treeDG(datas, dataArray) {
  for(var j = 0; j < dataArray.length; j++) {
    var dataArrayIndex = dataArray[j];
    var childrenArray = [];
    var CATL_ID = dataArrayIndex.name;

    for(var i = 0; i < datas.length; i++) {
      var data = datas[i];
      var CATL_FatherID = data.FatherID;
                if(CATL_FatherID == CATL_ID) {//判断是否为儿子节点
                  var CATL_IDE = data.ID;
                  var objTemp = {
                    "name": CATL_IDE,
                    "parent": CATL_FatherID
                  }
                  childrenArray.push(objTemp);
                }
            }
            dataArrayIndex.children = childrenArray;
            if(childrenArray.length > 0) {//有儿子节点则递归
              data2treeDG(datas, childrenArray);
            }
        }
        return dataArray;
    }


    function data2tree(datas) {
      var dataArray = [];
      datas.forEach(function(data) {
        var CATL_FatherID = data.FatherID;
        if(CATL_FatherID == '000') {
          var CATL_ID = data.ID;
          var objTemp = {
            "name": CATL_ID,
            "parent": CATL_FatherID
          }
          dataArray.push(objTemp);
        }
      })
      return data2treeDG(datas, dataArray);
    }


    var json = data2tree(csvdata);
    console.log(json);

 
//搞完了





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
//  .attr("fill","none")
//  .attr("stroke","black")
//  .attr("stroke-width","3");

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

  //                                                  wth-001

  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
  .attr("class", "node")
  .attr("transform", function(d) { return "translate(" + source.x0 + "," + source.y0 + ")"; })
  .on("click", click)
  .on("dblclick",dblclick);

  //————————————————————————————————————————————————————————————wth-001

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

//——————————————————————————————————————————————————wth-001
function dblclick(d) {
  window.location.href='release_choose_source.php';
}

//                                                  wth-001
console.log(svg);


}
}
);



