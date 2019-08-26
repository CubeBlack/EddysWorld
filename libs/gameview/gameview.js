class GameView{
  constructor(content,grid=true,jsonContent = ''){
    //Iniciar Variaveis
    this.jsonContent = jsonContent;
    this.eleContent = content;
    this.eleContent.addEventListener("resize", this.resize);
    this.enableGrid = grid;
    this.gridBase = 30;
    this.z = 8;
    this.x = 0;
    this.y = 0;
    this.contentObjct;
    //--- Criar elementos ---
    //Grid
    this.eleContentGrid = document.createElement('canvas');
    this.eleContentGrid.setAttribute("class", "game_view_contentgrid");
    this.eleContentGrid.setAttribute("height", this.eleContent.offsetHeight);
    this.eleContentGrid.setAttribute("width", this.eleContent.offsetWidth);
    this.gridContext = this.eleContentGrid.getContext('2d');
    this.eleContent.appendChild(this.eleContentGrid);
    //draw
    this.eleContentDraw = document.createElement('canva');
    this.eleContent.appendChild(this.eleContentDraw);
    //---- Desenhar conteudo ----
    this.gridShow();
    this.contentDraw();
  }
  resize(){
    this.eleContentGrid.setAttribute("height", this.eleContent.offsetHeight);
    this.eleContentGrid.setAttribute("width", this.eleContent.offsetWidth);
    this.gridShow();
    console.log("resize");
  }
  gridShow (){
    this.gridContext.clearRect(0, 0, this.gridContext.width, this.gridContext.height);
    if(!this.enableGrid) return;
    //Linhas centrais da grade
    this.gridContext.strokeStyle = "#FF0000";
    this.gridContext.font = "10px Arial";
    this.gridContext.fillStyle = 'red';

    this.gridContext.beginPath();
    this.gridContext.moveTo(this.eleContentGrid.offsetWidth/2, 0);
    this.gridContext.lineTo(this.eleContentGrid.offsetWidth/2, this.eleContentGrid.offsetHeight);
    this.gridContext.stroke();
    //this.gridContent.closePath();

    this.gridContext.fillText('0', (this.eleContentGrid.offsetWidth/2)+2, 10);

    this.gridContext.beginPath();
    this.gridContext.moveTo(0, this.eleContentGrid.offsetHeight/2);
    this.gridContext.lineTo(this.eleContentGrid.offsetWidth, this.eleContentGrid.offsetHeight/2);
    this.gridContext.stroke();
    //this.gridContent.closePath();

    this.gridContext.fillText('0', 2, (this.eleContentGrid.offsetHeight/2)-2);

    this.gridContext.strokeStyle = "#000000";
    this.gridContext.fillStyle = "#000000";
    var num ;

    for (num = 1 ; num < (this.eleContentGrid.offsetWidth / this.gridBase)/2 ; num++) {
      //
      this.gridContext.beginPath();
      this.gridContext.moveTo((this.eleContentGrid.offsetWidth )/2 + (num * this.gridBase) , 0);
      this.gridContext.lineTo((this.eleContentGrid.offsetWidth )/2 + (num * this.gridBase) , this.eleContentGrid.offsetHeight);
      this.gridContext.stroke();

      this.gridContext.font = "10px Arial";
      this.gridContext.fillText(Math.round(num), (this.eleContentGrid.offsetWidth)/2 + (num * this.gridBase) + 2, 10);
      //*
      this.gridContext.beginPath();
      this.gridContext.moveTo((this.eleContentGrid.offsetWidth)/2 - (num * this.gridBase) , 0);
      this.gridContext.lineTo((this.eleContentGrid.offsetWidth)/2 - (num * this.gridBase) , this.eleContentGrid.offsetHeight);
      this.gridContext.stroke();

      this.gridContext.font = "10px Arial";
      this.gridContext.fillText(Math.round(num), (this.eleContentGrid.offsetWidth)/2 - (num * this.gridBase) + 2, 10);
    }
//*/
    for (num = 1 ; num < (this.eleContentGrid.offsetHeight / this.gridBase)/2; num++) {
      //
      this.gridContext.beginPath();
      this.gridContext.moveTo(0 , (this.eleContentGrid.offsetHeight/2) + (num * this.gridBase));
      this.gridContext.lineTo(this.eleContentGrid.offsetWidth, (this.eleContentGrid.offsetHeight/2) + (num * this.gridBase));
      this.gridContext.stroke();

      this.gridContext.font = "10px Arial";
      this.gridContext.fillText(Math.round(num), 2, (this.eleContentGrid.offsetHeight/2) + (num * this.gridBase) -2);
      //
      this.gridContext.beginPath();
      this.gridContext.moveTo(0 , (this.eleContentGrid.offsetHeight/2) - (num * this.gridBase));
      this.gridContext.lineTo(this.eleContentGrid.offsetWidth, (this.eleContentGrid.offsetHeight/2) - (num * this.gridBase));
      this.gridContext.stroke();

      this.gridContext.font = "10px Arial";
      this.gridContext.fillText(Math.round(num * - 1), 2, (this.eleContentGrid.offsetHeight/2) - (num * this.gridBase) -2);
    }
  }
  contentDraw(){
    this.gridContext.fillRect(25, 25, 100, 100);
    this.gridContext.clearRect(45, 45, 60, 60);
    this.gridContext.strokeRect(50, 50, 50, 50);
  }
  loadContent(contentJson = '[]'){
    this.contentJson = contentJson;
    this.contentObjct = json.parse(contentJson);
  }
}

console.log('gameview.js');
