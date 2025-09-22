# Erweiterte Überschrift  
## Erzeugt wird ein Inhaltselement *Überschrift* mit der Möglichkeit eine Unterüberschrift zu vergeben.  
Die Unterüberschrift kann `oberhalb` oder `unterhalb` der eigentlichen Überschrift stehen. Dies kann durch ein Dropdown selektiert werden.  
Weiters ist eine Auswahl vorhanden, in der man die Unterüberschrift ausserhalb des `h-tags`, entweder `oberhalb` oder `unterhalb` platziert.  

### Backend  
- **Unterüberschrift**  
Textfeld
- **Position der Unterüberschrift**  
Zur Auswahl stehen `Oberhalb` und `Unterhalb`
- **Unterüberschrift nur dekorativ**  
Checkbox

### Frontend  
**Oberhalb**  
```
<h1 class="content-subheadline">
    <span class="subheadline sub-above">Unterüberschrift</span>
    Überschrift
</h1>
```
**Unterhalb**  
```
<h1 class="content-subheadline">
    Überschrift
    <span class="subheadline sub-below">Unterüberschrift</span>
</h1>
```  
**Oberhalb - Unterüberschrift nur dekorativ**  
```
<div class="content-subheadline-wrapper">
    <span class="subheadline sub-above">Unterüberschrift</span>
    <h1 class="content-subheadline">
        Überschrift
    </h1>
</div>
```
**Unterhalb - Unterüberschrift nur dekorativ**  
```
<div class="content-subheadline-wrapper">
    <h1 class="content-subheadline">
        Überschrift
    </h1>
    <span class="subheadline sub-below">Unterüberschrift</span>
</div>
```  
### Hinweise  
Es wird kein (S)CSS mitgeliefert.
