using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Audio : MonoBehaviour
{
    public GameObject audi;
    public void onOff()
    {
        if (audi.active)
            audi.SetActive(false);
        else
            audi.SetActive(true);
    }
}
