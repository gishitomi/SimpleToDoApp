//
//  ViewController.swift
//  SimpleToDoApp
//
//  Created by 宜志富紹太 on 2023/02/11.
//

import UIKit

class ViewController: UIViewController, UITableViewDelegate, UITableViewDataSource {

    @IBOutlet weak var TableView: UITableView!
    
    let samples = ["ぎしこ", "紹太"]
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }

    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return samples.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        //セル取得
        let cell:UITableViewCell = tableView.dequeueReusableCell(withIdentifier: "ToDoCell", for: indexPath)
        
        //セルに表示する値を決める
        cell.textLabel!.text = samples[indexPath.row]
        return cell
    }
    
    

}

