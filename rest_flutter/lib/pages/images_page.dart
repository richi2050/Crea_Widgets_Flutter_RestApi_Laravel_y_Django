import 'package:flutter/material.dart';
import 'package:rest_flutter/components/page_component.dart';
import 'package:rest_flutter/models/image_model.dart';
import 'package:rest_flutter/utils/custom_drawer.dart';
import 'package:rest_flutter/widgets/image_widget.dart';

class ImagesPage extends StatelessWidget with PageComponent {
  static const String ROUTE = '/images';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("ImagesPage"),
      ),
      drawer: CustomDrawer.getDrawer(context),
      body: Column(children: buildWidgets(getData(), ImageWidget.build)),
    );
  }

  /*
    * Obtiene la data y compone el modelo
   */

  List<ImageModel> getData() {
    List<ImageModel> imageModels = List();

    for (int i = 0; i < 2; i++)
      imageModels.add(ImageModel.constructor(
          "https://cdn.pixabay.com/photo/2021/04/03/12/25/lone-tree-6147402_960_720.jpg"));

    return imageModels;
  }
}
