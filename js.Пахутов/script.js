"use strict"
class Road
{
    constructor(image, y)
    {
        this.x = 0;
        this.y = y;
        this.image = new Image();
        this.image.src = image;

        let obj = this;

        this.image.addEventListener('load', function(){
            obj.loaded = true;
        })
    }
    update(road){
        this.y += speed;
        if(this.y > window.innerHeight){
            this.y = road.y - cvs.height + speed;
        }
    }
}

let cvs = document.querySelector('#canvas');
let ctx = cvs.getContext('2d');


let speed = 5;
const UPDATE_TIME = 1000 / 60;
let timer = null;

resize();

let roads =
[
    new Road('images/road.jpg', 0),
    new Road('images/road.jpg', cvs.height)
]

start();

function start()
{
    timer = setInterval(update, UPDATE_TIME);
}

function update()
{
    roads[0].update(roads[1]);
    roads[1].update(roads[0]);
    draw();
}

function draw()
{
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for(let i = 0; i < roads.length; i++){
        ctx.drawImage
        (
            roads[i].image,
            0,
            0,
            roads[i].image.width,
            roads[i].image.height,
            roads[i].x,
            roads[i].y,
            canvas.width,
            canvas.height,
        );
    }
}

function resize()
{
    canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
}