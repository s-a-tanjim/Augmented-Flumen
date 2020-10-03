using UnityEngine;
using UnityEngine.UI;
using System.Collections;
public class Sakshar : MonoBehaviour
{
    public Image van;
    public void vanStart()
    {
        if (!van.gameObject.active)
        {
            van.gameObject.SetActive(true);
            StartCoroutine(startSlide(0.1f));
        }
        else if (van.gameObject.active)
        {
            StartCoroutine(startSlide(-0.1f));

        }
    }
    IEnumerator startSlide(float i)
    {
        yield return new WaitForSeconds(0.01f);
        van.fillAmount = van.fillAmount + i;
        if (van.fillAmount < 1 && van.fillAmount > 0)
        {
            StartCoroutine(startSlide(i));
        }
        else if (van.fillAmount == 0)
        {
            van.gameObject.SetActive(false);

        }
    }

}
