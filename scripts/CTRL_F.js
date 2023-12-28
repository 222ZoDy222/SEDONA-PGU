

let inputField = document.getElementById("findShit");

if(inputField == null){
	console.log("field null");
}

inputField.addEventListener('change', inputTextTrim);

// текущий текст поиска
var inputText;
var map = { /* inputText: массив_или_различные_опции */ };

function inputTextTrim() {
  var t = inputField.value.trim().toLowerCase();

  if (t && t !== inputText) {
    // для примера все удалю, но в реале такой объект можно использовать как кеш поиска
    if (map[inputText]) {
      while (map[inputText].length) {
        document.body.removeChild(map[inputText].pop());
      }
      map[inputText] = null;
      delete map[inputText];
    }
    inputText = t;
    console.log('find', inputText);
    findText(document.body /* root-element */);
  }
}

// Обход элементов
function findText(el) {

  [].forEach.call(el.childNodes, i => {
    // node 3 - текс
    if (i.nodeType === 3) {
    	var style = window.getComputedStyle(el, null).getPropertyValue('font-size');
    	var fontSize = parseFloat(style); 
    	
      	findTextNode(i,fontSize);
    }
    else if (i.nodeType === 1) {
      findText(i);
    }
  });
}

// Поиск вхождения
function findTextNode(tn, fontSize) {
  var t = tn.data.toLowerCase(), i = 0;

  // вхождений в строке может быть множество
  while ((i = t.indexOf(inputText, i)) !== -1) {
    selectText(tn, i++, inputText.length,fontSize);
  }
}

// Поиск позиции
function selectText(tn, i, l, fontSize) {
  console.log(tn, i, l);
  // копируем для наложения сверху
  var copy = tn.data.substring(i, i + l);
  if (!map[inputText]) {
    map[inputText] = [];
  }

  // определяем позицию и создаем элемент

  // выбираем наш кусок текста
  var range = document.createRange();
  range.setStart(tn, i);
  range.setEnd(tn, i + l);
  // определяем размеры и позиции
  var rect = range.getBoundingClientRect();
  //var style = window.getComputedStyle(tn, null).getPropertyValue('font-size');
  //var fontSize = parseFloat(style); 
  //console.log(fontSize);
  console.log(fontSize);
  createFindText(inputText, copy, rect.x, rect.y, rect.width, rect.height,fontSize);
}

// Создание элемента
function createFindText(iText, text, posX, posY, width, height, fontSize) {
  var s = document.createElement('span');
  s.textContent = text;
  s.style.backgroundColor = '#238c39';
  s.style.color = 'black';
  s.style.position = 'absolute';
  
  s.style.left = posX + 'px';
  s.style.top = posY + 'px';
  s.style.width = width + 'px';
  s.style.height = height + 'px';
  // для последующего удаления
  map[iText].push(s);
  document.body.appendChild(s);
}