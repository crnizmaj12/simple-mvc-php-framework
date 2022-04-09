interface MyTypescriptInterface {
    propOne: any;
    propTwo: string;
    propThree: number[];
    propFour: boolean;
}

class AnActualClass {
    aProperty: string;
}

interface AnotherTypescriptInterface {
    nestedObjectsInAList: MyTypescriptInterface[];
    recursiveObject: AnotherTypescriptInterface;
    isReallyCool: boolean;
}