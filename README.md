
# changes for emojis:

1. added NotoColorEmoji.ttf font to fonts

2. reverted to ladder emoji in content/research/cladder.md
3. reverted to folder emoji in content/code/omnifig.md

4. added @font-face in styles.css (ganz oben) and updated .project-page-emoji

<pre>
.project-page-emoji {
    display: flex;
    font-size: 1.8em;
    font-family: 'Noto Color Emoji', sans-serif;
    margin-right: 10px;
}
</pre>

5. in script.js addProjectToGallery added class to the emoji span: 

<pre>
const emoji = info.emoji ? `<span class='project-page-emoji'>${info.emoji}</span>` : '';
</pre>

6. in home.md, changed src="/assets... into src="assets/... (relative url)
