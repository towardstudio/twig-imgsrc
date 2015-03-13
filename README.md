#Twig Imgsrc
A Craft CMS Twig extension for consuming the Imgsrc.me image placeholder service in your templates.

##Install

Copy the content of the 'imsrc' directory to your plugins folder. Enable. 

## Usage

The Imgsrc service takes several parameters:

- Dimensions (width, height)
- Background color
- Text color
- Text

This twig extension only requires one parameter, all others are optional.

`<img src="{{imgsrc(width, height, background-color, text-color, text)}}">`

The following will return a 500px square image:

`<img src="{{imgsrc(500)}}">`

To specify the height:

`<img src="{{imgsrc(500, 200)}}">`

To add a background color:

`<img src="{{imgsrc(500, 200, '57c1dc')}}">`

To add a text color:

`<img src="{{imgsrc(500, 200, '57c1dc', 'ffffff')}}">`

To specify text instead of dimensions:

`<img src="{{imgsrc(500, 200, '57c1dc', 'ffffff', 'Your text here')}}">`

## Roadmap

- Make arguments more flexible, eg: specify text without having to specify colours.
- Generate <img> tag with automatic width/height and optional attributes.