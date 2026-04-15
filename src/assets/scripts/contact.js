document.addEventListener("DOMContentLoaded", function() {
    function generateToast() {
        const toastHtml = `
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>`;
        const template = document.createElement("template");
        template.innerHTML = toastHtml.trim();
        return template.content.firstElementChild;
    }
    
    function contact() {
        const params = new URLSearchParams(window.location.search);
        const mailStatus = params.get("mail");
        if (mailStatus === "sent") {
            console.log("sent");
            const toast = generateToast();
            document.body.appendChild(toast);
            return;
        } else if (mailStatus === "error") {
            console.log("error");
            const toast = generateToast();
            document.body.appendChild(toast);
            return;
        } else {
            console.log("no mail status");
            return;
        }
    }

    contact();
});
