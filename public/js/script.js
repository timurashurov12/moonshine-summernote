function initSummernoteElement(el) {
  if (!jQuery(el).hasClass("summernote-initialized")) {
    jQuery(el).summernote({
      placeholder: "Add content here",
      tabsize: 2,
      height: 300,
      toolbar: [
        ["style", ["bold", "italic", "underline", "clear"]],
        ["font", ["strikethrough", "superscript", "subscript"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["table", ["table"]],
        ["insert", ["link", "picture"]],
        ["view", ["fullscreen", "codeview"]],
      ],
    });
    jQuery(el).addClass("summernote-initialized");
  }
}

jQuery(".summernote").each(function () {
  initSummernoteElement(this);
});

const observer = new MutationObserver(function (mutationsList) {
  for (const mutation of mutationsList) {
    mutation.addedNodes.forEach(function (node) {
      if (node.nodeType === 1) {
        if (node.matches(".summernote")) {
          initSummernoteElement(node);
        } else {
          // Вложенные summernote
          node.querySelectorAll?.(".summernote").forEach(function (innerNode) {
            initSummernoteElement(innerNode);
          });
        }
      }
    });
  }
});

observer.observe(document.body, {
  childList: true,
  subtree: true,
});
