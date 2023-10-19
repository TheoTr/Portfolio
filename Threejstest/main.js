import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer();

//add texture
const loader = new THREE.TextureLoader();
const galaxyTexture = loader.load('galaxie2.jpg');

// Créer une sphère environnementale
const backgroundSphere = new THREE.Mesh(
    new THREE.SphereGeometry(200, 200, 100),
	new THREE.MeshBasicMaterial({
		map: galaxyTexture,
		side : THREE.BackSide,
	})
);

// Ajouter la sphère environnementale à la scène
scene.add(backgroundSphere);
//Add light
const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);
const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
scene.add(directionalLight);



renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setClearColor(0x888888);
document.body.appendChild(renderer.domElement);

camera.position.z = 40;
camera.position.y = -8;
camera.rotation.x = 0;

// Load a 3d model
function loadModel(cordX, cordY, cordZ) {
    const loader = new GLTFLoader();
	
    loader.load('little_planet.glb', function (gltf) {
        scene.add(gltf.scene);
		gltf.scene.position.x = cordX;
		gltf.scene.position.y = cordY;
		gltf.scene.position.z = cordZ;
    }, undefined, function (error) {
        console.error(error);
    });
}

loadModel(0,0,0); // Chargez le modèle 3D
loadModel(50,0,0); // Chargez le modèle 3D
loadModel(-50,0,0); // Chargez le modèle 3D


// Rotation de la planète
let rotationAngleY = 0;

function animate() {
    requestAnimationFrame(animate);

    // Mettez à jour les angles de rotation (vous pouvez ajuster la vitesse en modifiant les incréments)
    rotationAngleY += 0.0025;
    // Effectuez la rotation autour des axes X et Y
    scene.children[3].rotation.y = rotationAngleY;
	scene.children[4].rotation.y = -rotationAngleY;
	scene.children[5].rotation.y = rotationAngleY / 2;
	scene.children[0].rotation.y = rotationAngleY / 4;

    renderer.render(scene, camera);
}

let i = 0;
let intervalid;
let time = 2.5;


function onKeyapress(event) {
	console.log(event.key);
	if (event.key == "ArrowUp") {
		intervalid = setInterval(function() {
			camera.position.x += 0.1;
			i++;
			if (i == 500) {
				clearInterval(intervalid);
				i = 0;
			}
		}, time*2);
	}
	else if (event.key == "ArrowDown") {
		intervalid = setInterval(function() {
			camera.position.x -= 0.1;
			i++;
			if (i == 500) {
				clearInterval(intervalid);
				i = 0;
			}
		}, time*2);
	}

}



window.addEventListener("keydown", onKeyapress);

animate();
