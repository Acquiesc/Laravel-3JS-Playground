initializePage();

var globalScene, globalCamera, globalRenderer;

function initializePage() {
    const scene = createScene();
    const camera = createCamera();
    const renderer = createRenderer();

    const earth = createSphere(0, 0, 0, '/imgs/textures/earth_texture.jpg');
    scene.add(earth);

    const cardFront = createPlane(0, 1.5, .5, '/imgs/textures/business-card-front.png');
    scene.add(cardFront);

    const cardBack = createPlane(0, 1.5, -.5, '/imgs/textures/business-card-back.png');
    cardBack.rotation.y = Math.PI; // Set rotation to 180 degrees (in radians)
    scene.add(cardBack);

    scene.add(camera);

    animate(earth, scene, camera, renderer);
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

function createCube(x, y, z, len, width, height, colorRGB) {
	const geometry = new THREE.BoxGeometry( len, width, height );
	const material = new THREE.MeshBasicMaterial( { color: colorRGB } );
	const cube = new THREE.Mesh( geometry, material );

	cube.position.set(x, y, z);

	return cube;
}

function createPlane(x, y, z, texture_src) {
    let loader = new THREE.TextureLoader();
    let texture = loader.load( texture_src );
    
    const geometry = new THREE.PlaneGeometry( 2, 1 );
    const material = new THREE.MeshBasicMaterial( { map: texture, side: THREE.DoubleSide } );
    const plane = new THREE.Mesh( geometry, material );

    plane.position.set(x, y, z);

    return plane;
}

function createSphere(x, y, z, texture_src) {
    let loader = new THREE.TextureLoader();
    let texture = loader.load(texture_src);
    
    const geometry = new THREE.SphereGeometry( 1, 32, 32 ); 
    const material = new THREE.MeshBasicMaterial( { map: texture } ); 
    const sphere = new THREE.Mesh( geometry, material );

    sphere.position.set(x, y, z);

    return sphere;
}

function animate(earth, scene, camera, renderer) {
    requestAnimationFrame(() => animate(earth, scene, camera, renderer));

    // Rotate the earth
    earth.rotation.x += 0.005;
    earth.rotation.y += 0.005;

    // Slowly rotate the camera
    const rotationSpeed = 0.005;
    camera.position.x = Math.cos(rotationSpeed) * camera.position.x - Math.sin(rotationSpeed) * camera.position.z;
    camera.position.z = Math.sin(rotationSpeed) * camera.position.x + Math.cos(rotationSpeed) * camera.position.z;
    camera.lookAt(scene.position);

    renderer.render(scene, camera);
}

window.addEventListener('resize', function() {
    onWindowResize(globalCamera, globalRenderer);
});

function onWindowResize(camera, renderer) {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize(window.innerWidth, window.innerHeight);
}