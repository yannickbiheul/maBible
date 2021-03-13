# Tricks CSS

## Appliquer des règles css différentes pour firefox

```css
@-moz-document url-prefix() {
  h1 {
    color: blue;
  }
}
```