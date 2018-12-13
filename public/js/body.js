/*
  Johan Karlsson (DonKarlssonSan)
  drag to rotate manually
  pinch to zoom
*/
let scene;
let camera;
let renderer;
let cubes;
let positions;
let connections;

function setup() {
    setupScene();
    setupCamera();
    setupRenderer();
    setupPositions();
    setupConnections();
    setupCubes();
    setupLights();
    setupEventListeners();
    setupControls();
}

function setupScene() {
    scene = new THREE.Scene();
}

function setupCamera() {
    let res = window.innerWidth / window.innerHeight;
    camera = new THREE.PerspectiveCamera(75, res, 0.1, 1000);
    camera.position.z = 20;
}

function setupRenderer() {
    renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    document.body.appendChild(renderer.domElement);
}

function setupPositions() {
    let nrOfPositions = 50;
    positions = [];

    for(let i = 0; i < nrOfPositions; i++) {
        let v = new THREE.Vector3(
            random(-20, 20),
            random(-20, 20),
            random(-20, 20));
        positions.push(v);
    }
}

function setupConnections() {
    let nrOfConnections = randomInt(40, 60);
    connections = [];
    for(let i = 0; i < nrOfConnections; i++) {
        let index0 = randomInt(positions.length);
        let index1 = randomInt(positions.length);

        let sphereGeometry = new THREE.SphereGeometry(0.1, 0.1, 0.1);
        let sphereMaterial = new THREE.MeshBasicMaterial({color: 0xffaabb});
        let sphere = new THREE.Mesh(sphereGeometry, sphereMaterial);
        sphere.castShadow = true;
        sphere.receiveShadow = true;
        scene.add(sphere);

        let connection = {
            p0: positions[index0],
            p1: positions[index1],
            dataPos: new THREE.Vector3(),
            lerp: Math.random(),
            sphere: sphere
        };
        connections.push(connection);
        let lineMaterial = new THREE.LineBasicMaterial({ color: 0x888888 });
        let lineGeometry = new THREE.Geometry();
        lineGeometry.vertices.push(positions[index0], positions[index1]);
        let line = new THREE.Line(lineGeometry, lineMaterial);
        scene.add(line);
    }
    debugger;
}

function setupCubes() {
    let geometry = new THREE.BoxGeometry(2, 2, 2);
    cubes = [];
    let hue = 0;
    let material = new THREE.MeshPhongMaterial({
        color: 0x555555,
        shininess: 90,
        fog: true,
        specular: 0x442222
    });

    positions.forEach(p => {
        let cube = new THREE.Mesh(geometry, material);
        cube.castShadow = true;
        cube.receiveShadow = true;
        cube.position.set(p.x, p.y, p.z);
        scene.add(cube);
        cubes.push(cube);
    });
}

function setupLights() {
    let ambientLight = new THREE.AmbientLight(0x111111);
    scene.add(ambientLight);

    let nrOfSpotLights = randomInt(3, 6);
    for(let i = 0; i < nrOfSpotLights; i++) {
        addSpotLight();
    }
}

function addSpotLight() {
    let spotLight = new THREE.SpotLight(0xbb9999);
    spotLight.position.set(
        random(-60, 60),
        random(-60, 60),
        random(-60, 60));
    spotLight.castShadow = true;
    spotLight.lookAt(0, 0, 0);
    scene.add(spotLight);
}

function setupEventListeners() {
    window.addEventListener("resize", onWindowResize);
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

function setupControls() {
    controls = new THREE.OrbitControls(camera);
    controls.autoRotate = true;
}

function draw() {
    requestAnimationFrame(draw);
    renderer.render(scene, camera);
    controls.update();
    moveData();
}

function moveData() {
    connections.forEach(connection => {
        debugger;
        connection.dataPos.lerpVectors(connection.p0, connection.p1, connection.lerp);
        connection.sphere.position.set(connection.dataPos.x, connection.dataPos.y, connection.dataPos.z)
        connection.lerp += 0.01;
        if(connection.lerp > 1) {
            connection.lerp = 0;
        }
    });
}

function random(min, max) {
    if(max === undefined) {
        max = min;
        min = 0;
    }
    return Math.floor(Math.random() * (max - min)) + min;
}

function randomInt(min, max) {
    return Math.floor(random(min, max));
}

setup();
draw();