import 'package:flutter/material.dart';

import 'Formulaire.dart';

import '../MainDrawer.dart';

import 'package:google_fonts/google_fonts.dart';

import 'package:sqflite/sqflite.dart';
import '../model/db.dart';
import '../model/Mclient.dart';
import '../model/imagedb.dart';
import 'package:material_design_icons_flutter/material_design_icons_flutter.dart';
import 'package:flutter_slidable/flutter_slidable.dart';

class Clients extends StatefulWidget {
  @override
  _State createState() => _State();
}

class _State extends State<Clients> {
  DbHelper databaseHelper = DbHelper();
  List<Client> clientList;
  final SlidableController slidableController = SlidableController();
  int count = 0;

  void addNewItem(context, Clientf) {
    showModalBottomSheet(
        isScrollControlled: true,
        context: context,
        builder: (BuildContext abc) {
          return Container(
              color: Colors.grey[200],
              height: MediaQuery.of(context).size.height * 0.8,
              child: Column(
                mainAxisAlignment: MainAxisAlignment.start,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Container(
                      padding: EdgeInsets.all(5),
                      margin: EdgeInsets.only(
                        right: 15,
                        left: 15,
                      ),
                      decoration: BoxDecoration(
                          color: Theme.of(context).primaryColor,
                          borderRadius: BorderRadius.only(
                            bottomLeft: Radius.circular(20),
                            bottomRight: Radius.circular(20),
                          )),
                      child: Row(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                          Container(
                              margin: EdgeInsets.all(5),
                              child: (f == null)
                                  ? Text('Ajouter un noveau',
                                      style: GoogleFonts.lato(
                                          fontSize: 17,
                                          color: Colors.white,
                                          fontWeight: FontWeight.w800))
                                  : Text('Modifie',
                                      style: GoogleFonts.lato(
                                          fontSize: 17,
                                          color: Colors.white,
                                          fontWeight: FontWeight.w800))),
                        ],
                      )),
                  FormPage(f)
                ],
              ));
        });
  }

  Widget build(BuildContext context) {
    if (clientList == null) {
      clientList = List<Client>();
      updateListView();
    }

    return Scaffold(
      appBar: AppBar(
        title: Text("Clients"),
        actions: <Widget>[
          IconButton(
            icon: Icon(Icons.search),
            onPressed: () {
              this.databaseHelper.deleteallclient();
            },
          ),
          IconButton(
            icon: Icon(Icons.sort_by_alpha),
            onPressed: () {},
          ),
          IconButton(
            icon: Icon(Icons.select_all),
            onPressed: () {},
          ),
          IconButton(
            icon: Icon(Icons.more),
            onPressed: () {},
          ),
        ],
      ),
      floatingActionButton: FloatingActionButton(
        backgroundColor: Theme.of(context).primaryColor,
        onPressed: () {
          addNewItem(context, null);
        },
        child: Container(
          child: Icon(Icons.add),
        ),
      ),
      bottomNavigationBar: BottomAppBar(
        shape: const CircularNotchedRectangle(),
        child: Container(
          color: Theme.of(context).primaryColor,
          height: 50.0,
        ),
      ),
      drawer: MainDrawer(),
      body: getListproduit(),
    );
  }

  ListView getListproduit() {
    TextStyle titleStyle = Theme.of(context).textTheme.subhead;

    return ListView.builder(
      itemCount: count,
      itemBuilder: (BuildContext context, int position) {
        return Slidable(
            actionPane: SlidableDrawerActionPane(),
            controller: slidableController,
            secondaryActions: <Widget>[
              IconSlideAction(
                caption: 'Historique',
                color: Colors.blue,
                icon: Icons.history,
                onTap: () => print('More'),
              ),
              IconSlideAction(
                caption: 'Modifie',
                color: Colors.green,
                icon: Icons.edit,
                onTap: () {
                  addNewItem(context, this.clientList[position]);
                },
              ),
              Container(
                width: 100,
                child: IconSlideAction(
                  caption: 'Supprimer',
                  color: Colors.red,
                  icon: Icons.delete,
                  onTap: () {
                    Navigator.of(context).pushNamed('/Clients');
                    var result = this.databaseHelper.deleteClient(
                        this.clientList[position].idClient);
                    if (result != 0) {
                      // Success
                      showDialog(
                        context: context,
                        builder: (BuildContext context) {
                          return AlertDialog(
                            title: Text("My title"),
                            content: Text("This is my message."),
                          );
                        },
                      );
                    } else {
                      // Failure

                      showDialog(
                        context: context,
                        builder: (BuildContext context) {
                          return AlertDialog(
                            title: Text("error"),
                            content: Text("errror"),
                          );
                        },
                      );
                    }
                  },
                ),
              ),
            ],
            child: Card(
              color: Colors.white,
              elevation: 2.0,
              child: ListTile(
                leading: CircleAvatar(
                  backgroundColor: Colors.black,
                  child: Utility.imageFromBase64String(
                      this.clientList[position].imageClient),
                ),
                title: Row(
                  children: [
                    Text(
                      this.clientList[position].addressClient,
                      style: GoogleFonts.roboto(
                          fontWeight: FontWeight.bold,
                          color: Theme.of(context).primaryColor),
                    ),
                    SizedBox(
                      width: 150,
                    ),
                    Container(
                        child: Row(
                      mainAxisAlignment: MainAxisAlignment.end,
                      crossAxisAlignment: CrossAxisAlignment.end,
                      children: [
                        Container(
                          margin: EdgeInsets.only(
                            left: 4,
                            right: 4,
                          ),
                          child: Text(
                            "Prix :",
                            style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                            ),
                          ),
                        ),
                        Container(
                          margin: EdgeInsets.only(
                            left: 4,
                          ),
                          child: Text(
                            this
                                .clientList[position]
                                .addressClient
                                .toString(),
                            style: GoogleFonts.lato(
                                fontSize: 10,
                                fontWeight: FontWeight.w700,
                                color: Colors.green),
                          ),
                        ),
                        Text(
                          "/",
                          style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                              color: Colors.black),
                        ),
                        Container(
                          child: Text(
                            this
                                .clientList[position]
                                .addressClient
                                .toString(),
                            style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                              color: Colors.red,
                            ),
                          ),
                        ),
                      ],
                    ))
                  ],
                ),
                subtitle: Row(
                  children: [
                    Container(
                        child: Icon(
                      MdiIcons.barcode,
                      color: Theme.of(context).primaryColor,
                    )),
                    SizedBox(width: 5),
                    Text(
                      this
                          .clientList[position]
                          .addressClient
                          .toString(),
                      style: titleStyle,
                    ),
                    SizedBox(width: 50),
                    Container(
                        child: Row(
                      mainAxisAlignment: MainAxisAlignment.end,
                      crossAxisAlignment: CrossAxisAlignment.end,
                      children: [
                        Icon(
                          MdiIcons.storePlus,
                          color: Colors.green,
                          size: 12,
                        ),
                        Container(
                          margin: EdgeInsets.only(
                            left: 4,
                            right: 4,
                          ),
                          child: Text(
                            "200",
                            style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                            ),
                          ),
                        ),
                        Icon(MdiIcons.storeMinus, size: 12, color: Colors.red),
                        Container(
                          margin: EdgeInsets.only(
                            left: 4,
                          ),
                          child: Text(
                            "14452",
                            style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                            ),
                          ),
                        ),
                        SizedBox(width: 5),
                        Icon(MdiIcons.store, size: 12, color: Colors.black),
                        Container(
                          margin: EdgeInsets.only(
                            left: 4,
                            right: 4,
                          ),
                          child: Text(
                            "200",
                            style: GoogleFonts.lato(
                              fontSize: 10,
                              fontWeight: FontWeight.w700,
                            ),
                          ),
                        ),
                      ],
                    ))
                  ],
                ),
                onTap: () {
                  setState(() {
                    Slidable.of(context).open();
                  }); //navigateToDetail(this.noteList[position],'Edit Note');
                },
              ),
            ));
      },
    );
  }

  void updateListView() {
    final Future<Database> dbFuture = databaseHelper.createDatabase();

    dbFuture.then((database) {
      Future<List<Client>> clientListFuture =
          databaseHelper.getclientlist();

      clientListFuture.then((clientList1) {
        print("hamza" + clientList1.first.addressClient);
        setState(() {
          this.clientList = clientList1;
          this.count = clientList1.length;
        });
      });
    });
  }
}
