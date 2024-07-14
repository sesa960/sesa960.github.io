class Specialheader extends HTMLElement{
    connectedCallback () {
        this.innerHTML= `
         <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="blog.html">Blog</a>
         </nav>

        `
    }
}
class Specialfooter extends HTMLElement{
    connectedCallback () {
        this.innerHTML = `
            <footer>
                <p>&copy; 2024 My Web Application</p>
            </footer>
        `
    }
}

customElements.define('special-header', Specialheader)
customElements.define('special-footer', Specialfooter)
