<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="">

    <title>Adam Lee</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet"> 
    
    <!--AR JS-->
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/examples/vendor/aframe/build/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.5.0/aframe/build/aframe-ar.js"></script>
    
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>
    <style>
        html, body, #scene-container {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            transform: translate3d(0,0,0);
            
        }
        
        body {
            background-color: rgb(35, 72, 122);
        }

        #scene-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #info1 {
            position: absolute !important;
            width: 100%;
            max-height: 100px;
        }

        #info2 {
            position: absolute !important;
            height: 100%;
            max-width: 100px;
            left: 0;
            bottom: 0;
            top: 0;
            transform: rotate(180deg);
        }

        #info2 p {
            color: red;
            transform: rotate(90deg);
            text-align: center;
        }

        video {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
        }
    </style>

</head>
<body>

    <div id="scene-container">
        <section class="text-white fs-1" id="info1" style="background-color: rgba(0,0,0,.7)">
            <div class="container" style="padding: 0; margin: 0;">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 text-center">
                        <p>AR-Cards</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="text-white fs-1 d-none" id="info2" style="background-color: rgba(0,0,0,.7)">
            <div class="container d-flex align-items-center" style="padding: 0; margin: 0; height: 100vh;">
                <div class="row d-flex align-items-center" style="height: 100vh;">
                    <div class="col-auto p-0">
                        <p class="flex-nowrap text-nowrap">Ar-Cards</p>
                    </div>
                </div>
            </div>
        </section>
        
        <script>
            //AR-Card Overlay
            //Created By: Adam & Travis
            let world;
        
            class World {
                constructor(container) {
                    this.scene = createScene();
                    this.camera = createCamera(container)
        
                    this.scene.add(this.camera);
                    this.renderer = createRenderer();
        
                    this.ArToolkitSource = createArToolkitSource(this.renderer);
                    this.ArToolkitContext = createArToolkitContext(this.camera);
                    this.ArToolkitControls = createArToolkitControls(this.ArToolkitContext, this.camera, this.scene);
        
                    container.append(this.renderer.domElement);
        
                    this.earth = createSphere();
                    this.earth.position.set(0, 1, 0);
                    this.scene.add(this.earth);
        
                    world = this;
        
                    const resizer = new Resizer(container, this.camera, this.renderer);
                    resizer.onResize = () => {
                        this.render();
                    }
        
                    animate();
                }
        
                render() {
                    animate();
                }
            }
        
            function createArToolkitControls(ArToolkitContext, camera, scene) {
                var ArMarkerControls = new THREEx.ArMarkerControls(ArToolkitContext, camera, {
                    type: 'pattern',
                    patternUrl: '/imgs/patts/Pattern_Test_2.patt',
                    changeMatrixMode: 'cameraTransformMatrix'
                });
        
                scene.visible = false;
        
                ArMarkerControls.addEventListener('markerFound', function (event) {
                    scene.visible = true;
                });
        
                return ArMarkerControls;
            }
        
            function createArToolkitContext(camera) {
                var ArToolkitContext = new THREEx.ArToolkitContext({
                    cameraParametersUrl: '/camera_para.dat',
                    detectionmode: 'color_and_matrix'
                });
                ArToolkitContext.init(function() {
                    camera.projectionMatrix.copy(ArToolkitContext.getProjectionMatrix());
                });
        
                return ArToolkitContext;
            }
        
            function createArToolkitSource(renderer) {
                var ArToolkitSource = new THREEx.ArToolkitSource({
                    sourceType: "webcam",
                });
        
                ArToolkitSource.init(function() {
                    setTimeout(function() {
                        ArToolkitSource.onResizeElement();
                        ArToolkitSource.copyElementSizeTo(renderer.domElement);
                    }, 2000)
                });
        
                return ArToolkitSource;
            }
        
            function createCamera(container) {
                const camera = new THREE.PerspectiveCamera(
                    75, // field of view
                    container.clientWidth / container.clientHeight, // aspect ratio
                    0.1, // near clipping plane
                    100 // far clipping plane
                );
        
                camera.position.set(0, 0, 5);
        
                return camera;
            }
        
            function createRenderer() {
                const renderer = new THREE.WebGLRenderer({
                    antialias: true,
                    alpha: true
                });
        
                renderer.physicallyCorrectLights = true;
                return renderer;
            }
        
            function createScene() {
                const scene = new THREE.Scene();
        
                const pointLight = new THREE.PointLight(0xffffff, 1);
                // for light placement visisbility
                // TODO: remove from production
                pointLight.add( 
                    new THREE.Mesh( 
                        //radius, width segments, height segments 
                        new THREE.SphereBufferGeometry( 0.05, 16,8 ), 
                        new THREE.MeshBasicMaterial({ color: 0xffffff, opacity: 0.5 }) 
                    ) 
                );
                pointLight.position.set(.5, 3, 2.5); // Set the position of the light
                scene.add(pointLight);
                
                return scene;
            }
        
            function createCube() {
                const geometry = new THREE.BoxGeometry(1, 1, 1);
                const material = new THREE.MeshLambertMaterial({ color: 0x00ff00 });
                const cube = new THREE.Mesh(geometry, material);
                
                return cube;
            }
        
            function createSphere() {
                let geometry1 = new THREE.SphereGeometry(1, 32,32);
            
                let loader = new THREE.TextureLoader();
                let texture = loader.load( '/imgs/textures/earth_texture.jpg' );
                let material1 = new THREE.MeshLambertMaterial( { map: texture, opacity: 0.8 } );
                
                mesh1 = new THREE.Mesh( geometry1, material1 );
                mesh1.position.set(0, 1, 0);
                
                return mesh1;
            }
        
            const setSize = (container, camera, renderer) => {
                const { clientWidth, clientHeight } = container;
        
                // Swap width and height values in portrait mode
                const aspectRatio = window.innerWidth > window.innerHeight
                    ? clientWidth / clientHeight
                    : clientHeight / clientWidth;
        
                camera.aspect = aspectRatio;
                camera.updateProjectionMatrix();
                renderer.setSize(clientWidth, clientHeight);
                renderer.setPixelRatio(window.devicePixelRatio);
            };
            
            function adjustInfoPosition(isPortrait) {
                const landscapeInfo = document.getElementById('info1');
                const portraitInfo = document.getElementById('info2');
        
                if (isPortrait) {
                    landscapeInfo.classList.toggle('d-none');
                    portraitInfo.classList.toggle('d-none');
                } else {
                    landscapeInfo.classList.toggle('d-none');
                    portraitInfo.classList.toggle('d-none');
                }
            }
        
            class Resizer {
                constructor(container, camera, renderer) {
                    setSize(container, camera, renderer);
        
                    // Check initial device orientation and apply rotation if necessary
                    if (window.innerWidth < window.innerHeight) {
                        document.body.style.transform = 'rotate(90deg)';
                        adjustInfoPosition(true);
                    }
        
                    window.addEventListener('resize', () => {
                        setSize(container, camera, renderer);
        
                        this.onResize();
                    });
        
                    window.addEventListener('orientationchange', () => {
                        setTimeout(() => {
                            setSize(container, camera, renderer);
        
                            // Apply rotation when device orientation changes to portrait
                            if (window.innerWidth < window.innerHeight) {
                                document.body.style.transform = 'rotate(90deg)';
                                document.getElementById('info').style.transform = 'rotate(-90deg)';
                                adjustInfoPosition(true);
                            } else {
                                document.body.style.transform = 'none';
                                document.getElementById('info').style.transform = 'none';
                                adjustInfoPosition(false);
                            }
        
                            this.onResize();
                        }, 500);
                    });
                }
            }
        
            function animate() {
                requestAnimationFrame(animate)
        
                //earth rotation
                world.earth.rotation.x += 0.005;
                world.earth.rotation.y += 0.005;
        
                world.scene.visible = world.camera.visible;
                world.ArToolkitContext.update(world.ArToolkitSource.domElement);
        
                world.renderer.render( world.scene, world.camera );
            }
        
            function main() {
                // Get a reference to the container element
                const container = document.getElementById('scene-container');
        
                // 1. Create an instance of the World app
                const world = new World(container);
        
                // 2. Render the scene
                world.render();
            }
        
            main();
        </script>
    </div>

</body>

</html>