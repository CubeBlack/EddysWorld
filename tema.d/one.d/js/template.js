function setTemplate(templateId,valor){
    if (!document.getElementById(templateId)){
      console.log("Template ID '"+templateId+"' inexistente");
      return "";
    }
    templateStr = document.getElementById(templateId).innerHTML;
    for (var i in valor) {
      key = "{{" + i + "}}";
      templateStr = templateStr.replace(key, valor[i]);
    }
    return templateStr;
}
console.log("template.js");
