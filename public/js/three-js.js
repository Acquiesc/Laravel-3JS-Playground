initializePage();

var globalScene, globalCamera, globalRenderer;

function initializePage() {
	const scene = createScene();
	const camera = createCamera();
	const renderer = createRenderer();

	const cubeSize = 1;
	const cubes = [];

	for (let i = -1; i < 2; i++) {
		const cube = createCube(i * (cubeSize + 1), 0, 0, cubeSize, cubeSize, cubeSize, 'rgb(255, 255, 0)');		cubes.push(cube);
		scene.add(cube);
	}

	scene.add(camera);


	scene.add( camera );

	animate(cubes, scene, camera, renderer);
}

function createScene() {
	const scene = new THREE.Scene();

    globalScene = scene;

	return scene;
}

function createCamera() {
	const camera = new THREE.PerspectiveCamera( 
		75, 
		window.innerWidth / window.innerHeight, 
		0.1, 
		1000 
	);

    globalCamera = camera;

	camera.position.z = 5;

	return camera;
}

function createRenderer() {
	const renderer = new THREE.WebGLRenderer();
	renderer.setSize( window.innerWidth, window.innerHeight );
	document.body.appendChild( renderer.domElement );

    globalRenderer = renderer;

	return renderer;
}

function createCube(x, y, z, posx, posy, posz, colorRGB) {
	const geometry = new THREE.BoxGeometry( posx, posy, posz );
	const material = new THREE.MeshBasicMaterial( { color: colorRGB } );
	const cube = new THREE.Mesh( geometry, material );

	cube.position.set(x, y, z);

	return cube;
}

function animate(cubes, scene, camera, renderer) {
	requestAnimationFrame(() => animate(cubes, scene, camera, renderer));

	cubes.forEach(cube => {
		cube.rotation.x += 0.01;
		cube.rotation.y += 0.01;
	})

	renderer.render( scene, camera );
}

window.addEventListener('resize', function() {
    onWindowResize(globalCamera, globalRenderer);
});

function onWindowResize(camera, renderer) {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize(window.innerWidth, window.innerHeight);
}