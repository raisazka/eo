var viewer = new Marzipano.Viewer(document.getElementById('pano'));

var source = Marzipano.ImageUrlSource.fromString(
  "//www.marzipano.net/media/cubemap/{f}.jpg"
);

var geometry = new Marzipano.CubeGeometry([{ tileSize: 1024, size: 1024 }]);

var limiter = Marzipano.RectilinearView.limit.traditional(4096, 100*Math.PI/180);
var view = new Marzipano.RectilinearView(null, limiter);

var scene = viewer.createScene({
  source: source,
  geometry: geometry,
  view: view,
  pinFirstLevel: true
});

scene.switchTo();