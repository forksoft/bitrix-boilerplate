import {Type} from 'main.core';

export class TestExt
{
	constructor(options = {name: 'TestExt'})
	{
		this.name = options.name;
	}

	setName(name)
	{
		if (Type.isString(name))
		{
			this.name = name;
		}
	}

	getName()
	{
		return this.name;
	}
}