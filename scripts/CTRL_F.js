

let inputField = document.getElementById("findShit");

if(inputField == null){
	console.log("field null");
}

inputField.addEventListener('change', FindAll);


var a ="daa";

const orig_doc = document.body.innerHTML;

var clear_button = document.getElementById("find_clear_lab5");
clear_button.onclick = Clear;

function FindAll()
{
    var text = inputField.value;
    Find(document.body, text);
}

function Find(node, text)
{
    var children = node.childNodes;
    for(var i=0;i<children.length;i++)
    {
        if(children[i].nodeType === Node.ELEMENT_NODE)
        {
            Find(children[i], text);
        }
        else if(children[i].nodeType === Node.TEXT_NODE)
        {
            if(children[i].textContent.indexOf(text) != -1)
            {
                let orig_cont = children[i].textContent;
                let child = children[i];
                let parent = children[i].parentNode;
                let new_cont = "";
                let start = 0;
                let end = 0;
                while(orig_cont.length > 0)
                {
                    start = orig_cont.indexOf(text);
                    if(start == -1)
                    {
                        if(orig_cont.length > 0)
                        {
                            new_cont = new_cont + orig_cont;
                        } 
                        break;
                    }

                    new_cont = new_cont + orig_cont.substr(0, start) + "<i style='color:green'>" + orig_cont.substr(start, text.length) + "</i>";
                    orig_cont = orig_cont.substr(start + text.length, orig_cont.length);

                }              
                let d = document.createElement('div');
                d.innerHTML = new_cont;
                parent.replaceChild(d, child);
            }
        }
    }
}

function Clear()
{
  document.body.innerHTML = orig_doc;
    
    window.location.reload()
}