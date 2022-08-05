<?php


/**
 * Base class that represents a query for the 'Organisme' table.
 *
 * 
 *
 * @method CommonOrganismeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonOrganismeQuery orderByAcronyme($order = Criteria::ASC) Order by the acronyme column
 * @method CommonOrganismeQuery orderByTypeArticleOrg($order = Criteria::ASC) Order by the type_article_org column
 * @method CommonOrganismeQuery orderByDenominationOrg($order = Criteria::ASC) Order by the denomination_org column
 * @method CommonOrganismeQuery orderByCategorieInsee($order = Criteria::ASC) Order by the categorie_insee column
 * @method CommonOrganismeQuery orderByDescriptionOrg($order = Criteria::ASC) Order by the description_org column
 * @method CommonOrganismeQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonOrganismeQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method CommonOrganismeQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonOrganismeQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonOrganismeQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonOrganismeQuery orderByIdAttribFile($order = Criteria::ASC) Order by the id_attrib_file column
 * @method CommonOrganismeQuery orderByAttribFile($order = Criteria::ASC) Order by the attrib_file column
 * @method CommonOrganismeQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonOrganismeQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method CommonOrganismeQuery orderByIdClientAnm($order = Criteria::ASC) Order by the id_client_ANM column
 * @method CommonOrganismeQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method CommonOrganismeQuery orderBySignataireCao($order = Criteria::ASC) Order by the signataire_cao column
 * @method CommonOrganismeQuery orderByOffset($order = Criteria::ASC) Order by the offset column
 * @method CommonOrganismeQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonOrganismeQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonOrganismeQuery orderByTel($order = Criteria::ASC) Order by the tel column
 * @method CommonOrganismeQuery orderByTelecopie($order = Criteria::ASC) Order by the telecopie column
 * @method CommonOrganismeQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonOrganismeQuery orderByAffichageEntite($order = Criteria::ASC) Order by the affichage_entite column
 * @method CommonOrganismeQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonOrganismeQuery orderByDenominationOrgAr($order = Criteria::ASC) Order by the denomination_org_ar column
 * @method CommonOrganismeQuery orderByDescriptionOrgAr($order = Criteria::ASC) Order by the description_org_ar column
 * @method CommonOrganismeQuery orderByAdresseAr($order = Criteria::ASC) Order by the adresse_ar column
 * @method CommonOrganismeQuery orderByVilleAr($order = Criteria::ASC) Order by the ville_ar column
 * @method CommonOrganismeQuery orderByAdresse2Ar($order = Criteria::ASC) Order by the adresse2_ar column
 * @method CommonOrganismeQuery orderByPaysAr($order = Criteria::ASC) Order by the pays_ar column
 * @method CommonOrganismeQuery orderByDenominationOrgFr($order = Criteria::ASC) Order by the denomination_org_fr column
 * @method CommonOrganismeQuery orderByDescriptionOrgFr($order = Criteria::ASC) Order by the description_org_fr column
 * @method CommonOrganismeQuery orderByAdresseFr($order = Criteria::ASC) Order by the adresse_fr column
 * @method CommonOrganismeQuery orderByVilleFr($order = Criteria::ASC) Order by the ville_fr column
 * @method CommonOrganismeQuery orderByAdresse2Fr($order = Criteria::ASC) Order by the adresse2_fr column
 * @method CommonOrganismeQuery orderByPaysFr($order = Criteria::ASC) Order by the pays_fr column
 * @method CommonOrganismeQuery orderByDenominationOrgEs($order = Criteria::ASC) Order by the denomination_org_es column
 * @method CommonOrganismeQuery orderByDescriptionOrgEs($order = Criteria::ASC) Order by the description_org_es column
 * @method CommonOrganismeQuery orderByAdresseEs($order = Criteria::ASC) Order by the adresse_es column
 * @method CommonOrganismeQuery orderByVilleEs($order = Criteria::ASC) Order by the ville_es column
 * @method CommonOrganismeQuery orderByAdresse2Es($order = Criteria::ASC) Order by the adresse2_es column
 * @method CommonOrganismeQuery orderByPaysEs($order = Criteria::ASC) Order by the pays_es column
 * @method CommonOrganismeQuery orderByDenominationOrgEn($order = Criteria::ASC) Order by the denomination_org_en column
 * @method CommonOrganismeQuery orderByDescriptionOrgEn($order = Criteria::ASC) Order by the description_org_en column
 * @method CommonOrganismeQuery orderByAdresseEn($order = Criteria::ASC) Order by the adresse_en column
 * @method CommonOrganismeQuery orderByVilleEn($order = Criteria::ASC) Order by the ville_en column
 * @method CommonOrganismeQuery orderByAdresse2En($order = Criteria::ASC) Order by the adresse2_en column
 * @method CommonOrganismeQuery orderByPaysEn($order = Criteria::ASC) Order by the pays_en column
 * @method CommonOrganismeQuery orderByDenominationOrgSu($order = Criteria::ASC) Order by the denomination_org_su column
 * @method CommonOrganismeQuery orderByDescriptionOrgSu($order = Criteria::ASC) Order by the description_org_su column
 * @method CommonOrganismeQuery orderByAdresseSu($order = Criteria::ASC) Order by the adresse_su column
 * @method CommonOrganismeQuery orderByVilleSu($order = Criteria::ASC) Order by the ville_su column
 * @method CommonOrganismeQuery orderByAdresse2Su($order = Criteria::ASC) Order by the adresse2_su column
 * @method CommonOrganismeQuery orderByPaysSu($order = Criteria::ASC) Order by the pays_su column
 * @method CommonOrganismeQuery orderByDenominationOrgDu($order = Criteria::ASC) Order by the denomination_org_du column
 * @method CommonOrganismeQuery orderByDescriptionOrgDu($order = Criteria::ASC) Order by the description_org_du column
 * @method CommonOrganismeQuery orderByAdresseDu($order = Criteria::ASC) Order by the adresse_du column
 * @method CommonOrganismeQuery orderByVilleDu($order = Criteria::ASC) Order by the ville_du column
 * @method CommonOrganismeQuery orderByAdresse2Du($order = Criteria::ASC) Order by the adresse2_du column
 * @method CommonOrganismeQuery orderByPaysDu($order = Criteria::ASC) Order by the pays_du column
 * @method CommonOrganismeQuery orderByDenominationOrgCz($order = Criteria::ASC) Order by the denomination_org_cz column
 * @method CommonOrganismeQuery orderByDescriptionOrgCz($order = Criteria::ASC) Order by the description_org_cz column
 * @method CommonOrganismeQuery orderByAdresseCz($order = Criteria::ASC) Order by the adresse_cz column
 * @method CommonOrganismeQuery orderByVilleCz($order = Criteria::ASC) Order by the ville_cz column
 * @method CommonOrganismeQuery orderByAdresse2Cz($order = Criteria::ASC) Order by the adresse2_cz column
 * @method CommonOrganismeQuery orderByPaysCz($order = Criteria::ASC) Order by the pays_cz column
 * @method CommonOrganismeQuery orderByDenominationOrgIt($order = Criteria::ASC) Order by the denomination_org_it column
 * @method CommonOrganismeQuery orderByDescriptionOrgIt($order = Criteria::ASC) Order by the description_org_it column
 * @method CommonOrganismeQuery orderByAdresseIt($order = Criteria::ASC) Order by the adresse_it column
 * @method CommonOrganismeQuery orderByVilleIt($order = Criteria::ASC) Order by the ville_it column
 * @method CommonOrganismeQuery orderByAdresse2It($order = Criteria::ASC) Order by the adresse2_it column
 * @method CommonOrganismeQuery orderByPaysIt($order = Criteria::ASC) Order by the pays_it column
 * @method CommonOrganismeQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonOrganismeQuery orderByComplement($order = Criteria::ASC) Order by the complement column
 * @method CommonOrganismeQuery orderByMoniteurProvenance($order = Criteria::ASC) Order by the moniteur_provenance column
 * @method CommonOrganismeQuery orderByCodeAccesLogiciel($order = Criteria::ASC) Order by the code_acces_logiciel column
 * @method CommonOrganismeQuery orderByDecalageHoraire($order = Criteria::ASC) Order by the decalage_horaire column
 * @method CommonOrganismeQuery orderByLieuResidence($order = Criteria::ASC) Order by the lieu_residence column
 * @method CommonOrganismeQuery orderByActivationFuseauHoraire($order = Criteria::ASC) Order by the activation_fuseau_horaire column
 * @method CommonOrganismeQuery orderByAlerte($order = Criteria::ASC) Order by the alerte column
 * @method CommonOrganismeQuery orderByOrdre($order = Criteria::ASC) Order by the ordre column
 * @method CommonOrganismeQuery orderByUrlInterfaceAnm($order = Criteria::ASC) Order by the URL_INTERFACE_ANM column
 *
 * @method CommonOrganismeQuery groupById() Group by the id column
 * @method CommonOrganismeQuery groupByAcronyme() Group by the acronyme column
 * @method CommonOrganismeQuery groupByTypeArticleOrg() Group by the type_article_org column
 * @method CommonOrganismeQuery groupByDenominationOrg() Group by the denomination_org column
 * @method CommonOrganismeQuery groupByCategorieInsee() Group by the categorie_insee column
 * @method CommonOrganismeQuery groupByDescriptionOrg() Group by the description_org column
 * @method CommonOrganismeQuery groupByAdresse() Group by the adresse column
 * @method CommonOrganismeQuery groupByCp() Group by the cp column
 * @method CommonOrganismeQuery groupByVille() Group by the ville column
 * @method CommonOrganismeQuery groupByEmail() Group by the email column
 * @method CommonOrganismeQuery groupByUrl() Group by the url column
 * @method CommonOrganismeQuery groupByIdAttribFile() Group by the id_attrib_file column
 * @method CommonOrganismeQuery groupByAttribFile() Group by the attrib_file column
 * @method CommonOrganismeQuery groupByDateCreation() Group by the date_creation column
 * @method CommonOrganismeQuery groupByActive() Group by the active column
 * @method CommonOrganismeQuery groupByIdClientAnm() Group by the id_client_ANM column
 * @method CommonOrganismeQuery groupByStatus() Group by the status column
 * @method CommonOrganismeQuery groupBySignataireCao() Group by the signataire_cao column
 * @method CommonOrganismeQuery groupByOffset() Group by the offset column
 * @method CommonOrganismeQuery groupBySigle() Group by the sigle column
 * @method CommonOrganismeQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonOrganismeQuery groupByTel() Group by the tel column
 * @method CommonOrganismeQuery groupByTelecopie() Group by the telecopie column
 * @method CommonOrganismeQuery groupByPays() Group by the pays column
 * @method CommonOrganismeQuery groupByAffichageEntite() Group by the affichage_entite column
 * @method CommonOrganismeQuery groupByIdInitial() Group by the id_initial column
 * @method CommonOrganismeQuery groupByDenominationOrgAr() Group by the denomination_org_ar column
 * @method CommonOrganismeQuery groupByDescriptionOrgAr() Group by the description_org_ar column
 * @method CommonOrganismeQuery groupByAdresseAr() Group by the adresse_ar column
 * @method CommonOrganismeQuery groupByVilleAr() Group by the ville_ar column
 * @method CommonOrganismeQuery groupByAdresse2Ar() Group by the adresse2_ar column
 * @method CommonOrganismeQuery groupByPaysAr() Group by the pays_ar column
 * @method CommonOrganismeQuery groupByDenominationOrgFr() Group by the denomination_org_fr column
 * @method CommonOrganismeQuery groupByDescriptionOrgFr() Group by the description_org_fr column
 * @method CommonOrganismeQuery groupByAdresseFr() Group by the adresse_fr column
 * @method CommonOrganismeQuery groupByVilleFr() Group by the ville_fr column
 * @method CommonOrganismeQuery groupByAdresse2Fr() Group by the adresse2_fr column
 * @method CommonOrganismeQuery groupByPaysFr() Group by the pays_fr column
 * @method CommonOrganismeQuery groupByDenominationOrgEs() Group by the denomination_org_es column
 * @method CommonOrganismeQuery groupByDescriptionOrgEs() Group by the description_org_es column
 * @method CommonOrganismeQuery groupByAdresseEs() Group by the adresse_es column
 * @method CommonOrganismeQuery groupByVilleEs() Group by the ville_es column
 * @method CommonOrganismeQuery groupByAdresse2Es() Group by the adresse2_es column
 * @method CommonOrganismeQuery groupByPaysEs() Group by the pays_es column
 * @method CommonOrganismeQuery groupByDenominationOrgEn() Group by the denomination_org_en column
 * @method CommonOrganismeQuery groupByDescriptionOrgEn() Group by the description_org_en column
 * @method CommonOrganismeQuery groupByAdresseEn() Group by the adresse_en column
 * @method CommonOrganismeQuery groupByVilleEn() Group by the ville_en column
 * @method CommonOrganismeQuery groupByAdresse2En() Group by the adresse2_en column
 * @method CommonOrganismeQuery groupByPaysEn() Group by the pays_en column
 * @method CommonOrganismeQuery groupByDenominationOrgSu() Group by the denomination_org_su column
 * @method CommonOrganismeQuery groupByDescriptionOrgSu() Group by the description_org_su column
 * @method CommonOrganismeQuery groupByAdresseSu() Group by the adresse_su column
 * @method CommonOrganismeQuery groupByVilleSu() Group by the ville_su column
 * @method CommonOrganismeQuery groupByAdresse2Su() Group by the adresse2_su column
 * @method CommonOrganismeQuery groupByPaysSu() Group by the pays_su column
 * @method CommonOrganismeQuery groupByDenominationOrgDu() Group by the denomination_org_du column
 * @method CommonOrganismeQuery groupByDescriptionOrgDu() Group by the description_org_du column
 * @method CommonOrganismeQuery groupByAdresseDu() Group by the adresse_du column
 * @method CommonOrganismeQuery groupByVilleDu() Group by the ville_du column
 * @method CommonOrganismeQuery groupByAdresse2Du() Group by the adresse2_du column
 * @method CommonOrganismeQuery groupByPaysDu() Group by the pays_du column
 * @method CommonOrganismeQuery groupByDenominationOrgCz() Group by the denomination_org_cz column
 * @method CommonOrganismeQuery groupByDescriptionOrgCz() Group by the description_org_cz column
 * @method CommonOrganismeQuery groupByAdresseCz() Group by the adresse_cz column
 * @method CommonOrganismeQuery groupByVilleCz() Group by the ville_cz column
 * @method CommonOrganismeQuery groupByAdresse2Cz() Group by the adresse2_cz column
 * @method CommonOrganismeQuery groupByPaysCz() Group by the pays_cz column
 * @method CommonOrganismeQuery groupByDenominationOrgIt() Group by the denomination_org_it column
 * @method CommonOrganismeQuery groupByDescriptionOrgIt() Group by the description_org_it column
 * @method CommonOrganismeQuery groupByAdresseIt() Group by the adresse_it column
 * @method CommonOrganismeQuery groupByVilleIt() Group by the ville_it column
 * @method CommonOrganismeQuery groupByAdresse2It() Group by the adresse2_it column
 * @method CommonOrganismeQuery groupByPaysIt() Group by the pays_it column
 * @method CommonOrganismeQuery groupBySiren() Group by the siren column
 * @method CommonOrganismeQuery groupByComplement() Group by the complement column
 * @method CommonOrganismeQuery groupByMoniteurProvenance() Group by the moniteur_provenance column
 * @method CommonOrganismeQuery groupByCodeAccesLogiciel() Group by the code_acces_logiciel column
 * @method CommonOrganismeQuery groupByDecalageHoraire() Group by the decalage_horaire column
 * @method CommonOrganismeQuery groupByLieuResidence() Group by the lieu_residence column
 * @method CommonOrganismeQuery groupByActivationFuseauHoraire() Group by the activation_fuseau_horaire column
 * @method CommonOrganismeQuery groupByAlerte() Group by the alerte column
 * @method CommonOrganismeQuery groupByOrdre() Group by the ordre column
 * @method CommonOrganismeQuery groupByUrlInterfaceAnm() Group by the URL_INTERFACE_ANM column
 *
 * @method CommonOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOrganisme findOne(PropelPDO $con = null) Return the first CommonOrganisme matching the query
 * @method CommonOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonOrganisme matching the query, or a new CommonOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonOrganisme findOneByAcronyme(string $acronyme) Return the first CommonOrganisme filtered by the acronyme column
 * @method CommonOrganisme findOneByTypeArticleOrg(int $type_article_org) Return the first CommonOrganisme filtered by the type_article_org column
 * @method CommonOrganisme findOneByDenominationOrg(string $denomination_org) Return the first CommonOrganisme filtered by the denomination_org column
 * @method CommonOrganisme findOneByCategorieInsee(string $categorie_insee) Return the first CommonOrganisme filtered by the categorie_insee column
 * @method CommonOrganisme findOneByDescriptionOrg(string $description_org) Return the first CommonOrganisme filtered by the description_org column
 * @method CommonOrganisme findOneByAdresse(string $adresse) Return the first CommonOrganisme filtered by the adresse column
 * @method CommonOrganisme findOneByCp(string $cp) Return the first CommonOrganisme filtered by the cp column
 * @method CommonOrganisme findOneByVille(string $ville) Return the first CommonOrganisme filtered by the ville column
 * @method CommonOrganisme findOneByEmail(string $email) Return the first CommonOrganisme filtered by the email column
 * @method CommonOrganisme findOneByUrl(string $url) Return the first CommonOrganisme filtered by the url column
 * @method CommonOrganisme findOneByIdAttribFile(string $id_attrib_file) Return the first CommonOrganisme filtered by the id_attrib_file column
 * @method CommonOrganisme findOneByAttribFile(string $attrib_file) Return the first CommonOrganisme filtered by the attrib_file column
 * @method CommonOrganisme findOneByDateCreation(string $date_creation) Return the first CommonOrganisme filtered by the date_creation column
 * @method CommonOrganisme findOneByActive(string $active) Return the first CommonOrganisme filtered by the active column
 * @method CommonOrganisme findOneByIdClientAnm(string $id_client_ANM) Return the first CommonOrganisme filtered by the id_client_ANM column
 * @method CommonOrganisme findOneByStatus(string $status) Return the first CommonOrganisme filtered by the status column
 * @method CommonOrganisme findOneBySignataireCao(string $signataire_cao) Return the first CommonOrganisme filtered by the signataire_cao column
 * @method CommonOrganisme findOneByOffset(string $offset) Return the first CommonOrganisme filtered by the offset column
 * @method CommonOrganisme findOneBySigle(string $sigle) Return the first CommonOrganisme filtered by the sigle column
 * @method CommonOrganisme findOneByAdresse2(string $adresse2) Return the first CommonOrganisme filtered by the adresse2 column
 * @method CommonOrganisme findOneByTel(string $tel) Return the first CommonOrganisme filtered by the tel column
 * @method CommonOrganisme findOneByTelecopie(string $telecopie) Return the first CommonOrganisme filtered by the telecopie column
 * @method CommonOrganisme findOneByPays(string $pays) Return the first CommonOrganisme filtered by the pays column
 * @method CommonOrganisme findOneByAffichageEntite(string $affichage_entite) Return the first CommonOrganisme filtered by the affichage_entite column
 * @method CommonOrganisme findOneByIdInitial(int $id_initial) Return the first CommonOrganisme filtered by the id_initial column
 * @method CommonOrganisme findOneByDenominationOrgAr(string $denomination_org_ar) Return the first CommonOrganisme filtered by the denomination_org_ar column
 * @method CommonOrganisme findOneByDescriptionOrgAr(string $description_org_ar) Return the first CommonOrganisme filtered by the description_org_ar column
 * @method CommonOrganisme findOneByAdresseAr(string $adresse_ar) Return the first CommonOrganisme filtered by the adresse_ar column
 * @method CommonOrganisme findOneByVilleAr(string $ville_ar) Return the first CommonOrganisme filtered by the ville_ar column
 * @method CommonOrganisme findOneByAdresse2Ar(string $adresse2_ar) Return the first CommonOrganisme filtered by the adresse2_ar column
 * @method CommonOrganisme findOneByPaysAr(string $pays_ar) Return the first CommonOrganisme filtered by the pays_ar column
 * @method CommonOrganisme findOneByDenominationOrgFr(string $denomination_org_fr) Return the first CommonOrganisme filtered by the denomination_org_fr column
 * @method CommonOrganisme findOneByDescriptionOrgFr(string $description_org_fr) Return the first CommonOrganisme filtered by the description_org_fr column
 * @method CommonOrganisme findOneByAdresseFr(string $adresse_fr) Return the first CommonOrganisme filtered by the adresse_fr column
 * @method CommonOrganisme findOneByVilleFr(string $ville_fr) Return the first CommonOrganisme filtered by the ville_fr column
 * @method CommonOrganisme findOneByAdresse2Fr(string $adresse2_fr) Return the first CommonOrganisme filtered by the adresse2_fr column
 * @method CommonOrganisme findOneByPaysFr(string $pays_fr) Return the first CommonOrganisme filtered by the pays_fr column
 * @method CommonOrganisme findOneByDenominationOrgEs(string $denomination_org_es) Return the first CommonOrganisme filtered by the denomination_org_es column
 * @method CommonOrganisme findOneByDescriptionOrgEs(string $description_org_es) Return the first CommonOrganisme filtered by the description_org_es column
 * @method CommonOrganisme findOneByAdresseEs(string $adresse_es) Return the first CommonOrganisme filtered by the adresse_es column
 * @method CommonOrganisme findOneByVilleEs(string $ville_es) Return the first CommonOrganisme filtered by the ville_es column
 * @method CommonOrganisme findOneByAdresse2Es(string $adresse2_es) Return the first CommonOrganisme filtered by the adresse2_es column
 * @method CommonOrganisme findOneByPaysEs(string $pays_es) Return the first CommonOrganisme filtered by the pays_es column
 * @method CommonOrganisme findOneByDenominationOrgEn(string $denomination_org_en) Return the first CommonOrganisme filtered by the denomination_org_en column
 * @method CommonOrganisme findOneByDescriptionOrgEn(string $description_org_en) Return the first CommonOrganisme filtered by the description_org_en column
 * @method CommonOrganisme findOneByAdresseEn(string $adresse_en) Return the first CommonOrganisme filtered by the adresse_en column
 * @method CommonOrganisme findOneByVilleEn(string $ville_en) Return the first CommonOrganisme filtered by the ville_en column
 * @method CommonOrganisme findOneByAdresse2En(string $adresse2_en) Return the first CommonOrganisme filtered by the adresse2_en column
 * @method CommonOrganisme findOneByPaysEn(string $pays_en) Return the first CommonOrganisme filtered by the pays_en column
 * @method CommonOrganisme findOneByDenominationOrgSu(string $denomination_org_su) Return the first CommonOrganisme filtered by the denomination_org_su column
 * @method CommonOrganisme findOneByDescriptionOrgSu(string $description_org_su) Return the first CommonOrganisme filtered by the description_org_su column
 * @method CommonOrganisme findOneByAdresseSu(string $adresse_su) Return the first CommonOrganisme filtered by the adresse_su column
 * @method CommonOrganisme findOneByVilleSu(string $ville_su) Return the first CommonOrganisme filtered by the ville_su column
 * @method CommonOrganisme findOneByAdresse2Su(string $adresse2_su) Return the first CommonOrganisme filtered by the adresse2_su column
 * @method CommonOrganisme findOneByPaysSu(string $pays_su) Return the first CommonOrganisme filtered by the pays_su column
 * @method CommonOrganisme findOneByDenominationOrgDu(string $denomination_org_du) Return the first CommonOrganisme filtered by the denomination_org_du column
 * @method CommonOrganisme findOneByDescriptionOrgDu(string $description_org_du) Return the first CommonOrganisme filtered by the description_org_du column
 * @method CommonOrganisme findOneByAdresseDu(string $adresse_du) Return the first CommonOrganisme filtered by the adresse_du column
 * @method CommonOrganisme findOneByVilleDu(string $ville_du) Return the first CommonOrganisme filtered by the ville_du column
 * @method CommonOrganisme findOneByAdresse2Du(string $adresse2_du) Return the first CommonOrganisme filtered by the adresse2_du column
 * @method CommonOrganisme findOneByPaysDu(string $pays_du) Return the first CommonOrganisme filtered by the pays_du column
 * @method CommonOrganisme findOneByDenominationOrgCz(string $denomination_org_cz) Return the first CommonOrganisme filtered by the denomination_org_cz column
 * @method CommonOrganisme findOneByDescriptionOrgCz(string $description_org_cz) Return the first CommonOrganisme filtered by the description_org_cz column
 * @method CommonOrganisme findOneByAdresseCz(string $adresse_cz) Return the first CommonOrganisme filtered by the adresse_cz column
 * @method CommonOrganisme findOneByVilleCz(string $ville_cz) Return the first CommonOrganisme filtered by the ville_cz column
 * @method CommonOrganisme findOneByAdresse2Cz(string $adresse2_cz) Return the first CommonOrganisme filtered by the adresse2_cz column
 * @method CommonOrganisme findOneByPaysCz(string $pays_cz) Return the first CommonOrganisme filtered by the pays_cz column
 * @method CommonOrganisme findOneByDenominationOrgIt(string $denomination_org_it) Return the first CommonOrganisme filtered by the denomination_org_it column
 * @method CommonOrganisme findOneByDescriptionOrgIt(string $description_org_it) Return the first CommonOrganisme filtered by the description_org_it column
 * @method CommonOrganisme findOneByAdresseIt(string $adresse_it) Return the first CommonOrganisme filtered by the adresse_it column
 * @method CommonOrganisme findOneByVilleIt(string $ville_it) Return the first CommonOrganisme filtered by the ville_it column
 * @method CommonOrganisme findOneByAdresse2It(string $adresse2_it) Return the first CommonOrganisme filtered by the adresse2_it column
 * @method CommonOrganisme findOneByPaysIt(string $pays_it) Return the first CommonOrganisme filtered by the pays_it column
 * @method CommonOrganisme findOneBySiren(string $siren) Return the first CommonOrganisme filtered by the siren column
 * @method CommonOrganisme findOneByComplement(string $complement) Return the first CommonOrganisme filtered by the complement column
 * @method CommonOrganisme findOneByMoniteurProvenance(int $moniteur_provenance) Return the first CommonOrganisme filtered by the moniteur_provenance column
 * @method CommonOrganisme findOneByCodeAccesLogiciel(string $code_acces_logiciel) Return the first CommonOrganisme filtered by the code_acces_logiciel column
 * @method CommonOrganisme findOneByDecalageHoraire(string $decalage_horaire) Return the first CommonOrganisme filtered by the decalage_horaire column
 * @method CommonOrganisme findOneByLieuResidence(string $lieu_residence) Return the first CommonOrganisme filtered by the lieu_residence column
 * @method CommonOrganisme findOneByActivationFuseauHoraire(string $activation_fuseau_horaire) Return the first CommonOrganisme filtered by the activation_fuseau_horaire column
 * @method CommonOrganisme findOneByAlerte(string $alerte) Return the first CommonOrganisme filtered by the alerte column
 * @method CommonOrganisme findOneByOrdre(int $ordre) Return the first CommonOrganisme filtered by the ordre column
 * @method CommonOrganisme findOneByUrlInterfaceAnm(string $URL_INTERFACE_ANM) Return the first CommonOrganisme filtered by the URL_INTERFACE_ANM column
 *
 * @method array findById(int $id) Return CommonOrganisme objects filtered by the id column
 * @method array findByAcronyme(string $acronyme) Return CommonOrganisme objects filtered by the acronyme column
 * @method array findByTypeArticleOrg(int $type_article_org) Return CommonOrganisme objects filtered by the type_article_org column
 * @method array findByDenominationOrg(string $denomination_org) Return CommonOrganisme objects filtered by the denomination_org column
 * @method array findByCategorieInsee(string $categorie_insee) Return CommonOrganisme objects filtered by the categorie_insee column
 * @method array findByDescriptionOrg(string $description_org) Return CommonOrganisme objects filtered by the description_org column
 * @method array findByAdresse(string $adresse) Return CommonOrganisme objects filtered by the adresse column
 * @method array findByCp(string $cp) Return CommonOrganisme objects filtered by the cp column
 * @method array findByVille(string $ville) Return CommonOrganisme objects filtered by the ville column
 * @method array findByEmail(string $email) Return CommonOrganisme objects filtered by the email column
 * @method array findByUrl(string $url) Return CommonOrganisme objects filtered by the url column
 * @method array findByIdAttribFile(string $id_attrib_file) Return CommonOrganisme objects filtered by the id_attrib_file column
 * @method array findByAttribFile(string $attrib_file) Return CommonOrganisme objects filtered by the attrib_file column
 * @method array findByDateCreation(string $date_creation) Return CommonOrganisme objects filtered by the date_creation column
 * @method array findByActive(string $active) Return CommonOrganisme objects filtered by the active column
 * @method array findByIdClientAnm(string $id_client_ANM) Return CommonOrganisme objects filtered by the id_client_ANM column
 * @method array findByStatus(string $status) Return CommonOrganisme objects filtered by the status column
 * @method array findBySignataireCao(string $signataire_cao) Return CommonOrganisme objects filtered by the signataire_cao column
 * @method array findByOffset(string $offset) Return CommonOrganisme objects filtered by the offset column
 * @method array findBySigle(string $sigle) Return CommonOrganisme objects filtered by the sigle column
 * @method array findByAdresse2(string $adresse2) Return CommonOrganisme objects filtered by the adresse2 column
 * @method array findByTel(string $tel) Return CommonOrganisme objects filtered by the tel column
 * @method array findByTelecopie(string $telecopie) Return CommonOrganisme objects filtered by the telecopie column
 * @method array findByPays(string $pays) Return CommonOrganisme objects filtered by the pays column
 * @method array findByAffichageEntite(string $affichage_entite) Return CommonOrganisme objects filtered by the affichage_entite column
 * @method array findByIdInitial(int $id_initial) Return CommonOrganisme objects filtered by the id_initial column
 * @method array findByDenominationOrgAr(string $denomination_org_ar) Return CommonOrganisme objects filtered by the denomination_org_ar column
 * @method array findByDescriptionOrgAr(string $description_org_ar) Return CommonOrganisme objects filtered by the description_org_ar column
 * @method array findByAdresseAr(string $adresse_ar) Return CommonOrganisme objects filtered by the adresse_ar column
 * @method array findByVilleAr(string $ville_ar) Return CommonOrganisme objects filtered by the ville_ar column
 * @method array findByAdresse2Ar(string $adresse2_ar) Return CommonOrganisme objects filtered by the adresse2_ar column
 * @method array findByPaysAr(string $pays_ar) Return CommonOrganisme objects filtered by the pays_ar column
 * @method array findByDenominationOrgFr(string $denomination_org_fr) Return CommonOrganisme objects filtered by the denomination_org_fr column
 * @method array findByDescriptionOrgFr(string $description_org_fr) Return CommonOrganisme objects filtered by the description_org_fr column
 * @method array findByAdresseFr(string $adresse_fr) Return CommonOrganisme objects filtered by the adresse_fr column
 * @method array findByVilleFr(string $ville_fr) Return CommonOrganisme objects filtered by the ville_fr column
 * @method array findByAdresse2Fr(string $adresse2_fr) Return CommonOrganisme objects filtered by the adresse2_fr column
 * @method array findByPaysFr(string $pays_fr) Return CommonOrganisme objects filtered by the pays_fr column
 * @method array findByDenominationOrgEs(string $denomination_org_es) Return CommonOrganisme objects filtered by the denomination_org_es column
 * @method array findByDescriptionOrgEs(string $description_org_es) Return CommonOrganisme objects filtered by the description_org_es column
 * @method array findByAdresseEs(string $adresse_es) Return CommonOrganisme objects filtered by the adresse_es column
 * @method array findByVilleEs(string $ville_es) Return CommonOrganisme objects filtered by the ville_es column
 * @method array findByAdresse2Es(string $adresse2_es) Return CommonOrganisme objects filtered by the adresse2_es column
 * @method array findByPaysEs(string $pays_es) Return CommonOrganisme objects filtered by the pays_es column
 * @method array findByDenominationOrgEn(string $denomination_org_en) Return CommonOrganisme objects filtered by the denomination_org_en column
 * @method array findByDescriptionOrgEn(string $description_org_en) Return CommonOrganisme objects filtered by the description_org_en column
 * @method array findByAdresseEn(string $adresse_en) Return CommonOrganisme objects filtered by the adresse_en column
 * @method array findByVilleEn(string $ville_en) Return CommonOrganisme objects filtered by the ville_en column
 * @method array findByAdresse2En(string $adresse2_en) Return CommonOrganisme objects filtered by the adresse2_en column
 * @method array findByPaysEn(string $pays_en) Return CommonOrganisme objects filtered by the pays_en column
 * @method array findByDenominationOrgSu(string $denomination_org_su) Return CommonOrganisme objects filtered by the denomination_org_su column
 * @method array findByDescriptionOrgSu(string $description_org_su) Return CommonOrganisme objects filtered by the description_org_su column
 * @method array findByAdresseSu(string $adresse_su) Return CommonOrganisme objects filtered by the adresse_su column
 * @method array findByVilleSu(string $ville_su) Return CommonOrganisme objects filtered by the ville_su column
 * @method array findByAdresse2Su(string $adresse2_su) Return CommonOrganisme objects filtered by the adresse2_su column
 * @method array findByPaysSu(string $pays_su) Return CommonOrganisme objects filtered by the pays_su column
 * @method array findByDenominationOrgDu(string $denomination_org_du) Return CommonOrganisme objects filtered by the denomination_org_du column
 * @method array findByDescriptionOrgDu(string $description_org_du) Return CommonOrganisme objects filtered by the description_org_du column
 * @method array findByAdresseDu(string $adresse_du) Return CommonOrganisme objects filtered by the adresse_du column
 * @method array findByVilleDu(string $ville_du) Return CommonOrganisme objects filtered by the ville_du column
 * @method array findByAdresse2Du(string $adresse2_du) Return CommonOrganisme objects filtered by the adresse2_du column
 * @method array findByPaysDu(string $pays_du) Return CommonOrganisme objects filtered by the pays_du column
 * @method array findByDenominationOrgCz(string $denomination_org_cz) Return CommonOrganisme objects filtered by the denomination_org_cz column
 * @method array findByDescriptionOrgCz(string $description_org_cz) Return CommonOrganisme objects filtered by the description_org_cz column
 * @method array findByAdresseCz(string $adresse_cz) Return CommonOrganisme objects filtered by the adresse_cz column
 * @method array findByVilleCz(string $ville_cz) Return CommonOrganisme objects filtered by the ville_cz column
 * @method array findByAdresse2Cz(string $adresse2_cz) Return CommonOrganisme objects filtered by the adresse2_cz column
 * @method array findByPaysCz(string $pays_cz) Return CommonOrganisme objects filtered by the pays_cz column
 * @method array findByDenominationOrgIt(string $denomination_org_it) Return CommonOrganisme objects filtered by the denomination_org_it column
 * @method array findByDescriptionOrgIt(string $description_org_it) Return CommonOrganisme objects filtered by the description_org_it column
 * @method array findByAdresseIt(string $adresse_it) Return CommonOrganisme objects filtered by the adresse_it column
 * @method array findByVilleIt(string $ville_it) Return CommonOrganisme objects filtered by the ville_it column
 * @method array findByAdresse2It(string $adresse2_it) Return CommonOrganisme objects filtered by the adresse2_it column
 * @method array findByPaysIt(string $pays_it) Return CommonOrganisme objects filtered by the pays_it column
 * @method array findBySiren(string $siren) Return CommonOrganisme objects filtered by the siren column
 * @method array findByComplement(string $complement) Return CommonOrganisme objects filtered by the complement column
 * @method array findByMoniteurProvenance(int $moniteur_provenance) Return CommonOrganisme objects filtered by the moniteur_provenance column
 * @method array findByCodeAccesLogiciel(string $code_acces_logiciel) Return CommonOrganisme objects filtered by the code_acces_logiciel column
 * @method array findByDecalageHoraire(string $decalage_horaire) Return CommonOrganisme objects filtered by the decalage_horaire column
 * @method array findByLieuResidence(string $lieu_residence) Return CommonOrganisme objects filtered by the lieu_residence column
 * @method array findByActivationFuseauHoraire(string $activation_fuseau_horaire) Return CommonOrganisme objects filtered by the activation_fuseau_horaire column
 * @method array findByAlerte(string $alerte) Return CommonOrganisme objects filtered by the alerte column
 * @method array findByOrdre(int $ordre) Return CommonOrganisme objects filtered by the ordre column
 * @method array findByUrlInterfaceAnm(string $URL_INTERFACE_ANM) Return CommonOrganisme objects filtered by the URL_INTERFACE_ANM column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonOrganismeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonOrganisme|CommonOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOrganismePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `acronyme`, `type_article_org`, `denomination_org`, `categorie_insee`, `description_org`, `adresse`, `cp`, `ville`, `email`, `url`, `id_attrib_file`, `attrib_file`, `date_creation`, `active`, `id_client_ANM`, `status`, `signataire_cao`, `offset`, `sigle`, `adresse2`, `tel`, `telecopie`, `pays`, `affichage_entite`, `id_initial`, `denomination_org_ar`, `description_org_ar`, `adresse_ar`, `ville_ar`, `adresse2_ar`, `pays_ar`, `denomination_org_fr`, `description_org_fr`, `adresse_fr`, `ville_fr`, `adresse2_fr`, `pays_fr`, `denomination_org_es`, `description_org_es`, `adresse_es`, `ville_es`, `adresse2_es`, `pays_es`, `denomination_org_en`, `description_org_en`, `adresse_en`, `ville_en`, `adresse2_en`, `pays_en`, `denomination_org_su`, `description_org_su`, `adresse_su`, `ville_su`, `adresse2_su`, `pays_su`, `denomination_org_du`, `description_org_du`, `adresse_du`, `ville_du`, `adresse2_du`, `pays_du`, `denomination_org_cz`, `description_org_cz`, `adresse_cz`, `ville_cz`, `adresse2_cz`, `pays_cz`, `denomination_org_it`, `description_org_it`, `adresse_it`, `ville_it`, `adresse2_it`, `pays_it`, `siren`, `complement`, `moniteur_provenance`, `code_acces_logiciel`, `decalage_horaire`, `lieu_residence`, `activation_fuseau_horaire`, `alerte`, `ordre`, `URL_INTERFACE_ANM` FROM `Organisme` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonOrganisme();
            $obj->hydrate($row);
            CommonOrganismePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonOrganisme|CommonOrganisme[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonOrganisme[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonOrganismePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonOrganismePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the acronyme column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronyme('fooValue');   // WHERE acronyme = 'fooValue'
     * $query->filterByAcronyme('%fooValue%'); // WHERE acronyme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAcronyme($acronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronyme)) {
                $acronyme = str_replace('*', '%', $acronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ACRONYME, $acronyme, $comparison);
    }

    /**
     * Filter the query on the type_article_org column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeArticleOrg(1234); // WHERE type_article_org = 1234
     * $query->filterByTypeArticleOrg(array(12, 34)); // WHERE type_article_org IN (12, 34)
     * $query->filterByTypeArticleOrg(array('min' => 12)); // WHERE type_article_org >= 12
     * $query->filterByTypeArticleOrg(array('max' => 12)); // WHERE type_article_org <= 12
     * </code>
     *
     * @param     mixed $typeArticleOrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByTypeArticleOrg($typeArticleOrg = null, $comparison = null)
    {
        if (is_array($typeArticleOrg)) {
            $useMinMax = false;
            if (isset($typeArticleOrg['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::TYPE_ARTICLE_ORG, $typeArticleOrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeArticleOrg['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::TYPE_ARTICLE_ORG, $typeArticleOrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::TYPE_ARTICLE_ORG, $typeArticleOrg, $comparison);
    }

    /**
     * Filter the query on the denomination_org column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrg('fooValue');   // WHERE denomination_org = 'fooValue'
     * $query->filterByDenominationOrg('%fooValue%'); // WHERE denomination_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrg($denominationOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrg)) {
                $denominationOrg = str_replace('*', '%', $denominationOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG, $denominationOrg, $comparison);
    }

    /**
     * Filter the query on the categorie_insee column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorieInsee('fooValue');   // WHERE categorie_insee = 'fooValue'
     * $query->filterByCategorieInsee('%fooValue%'); // WHERE categorie_insee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorieInsee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByCategorieInsee($categorieInsee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorieInsee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorieInsee)) {
                $categorieInsee = str_replace('*', '%', $categorieInsee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::CATEGORIE_INSEE, $categorieInsee, $comparison);
    }

    /**
     * Filter the query on the description_org column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrg('fooValue');   // WHERE description_org = 'fooValue'
     * $query->filterByDescriptionOrg('%fooValue%'); // WHERE description_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrg($descriptionOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrg)) {
                $descriptionOrg = str_replace('*', '%', $descriptionOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG, $descriptionOrg, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByCp($cp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cp)) {
                $cp = str_replace('*', '%', $cp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::CP, $cp, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the id_attrib_file column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAttribFile('fooValue');   // WHERE id_attrib_file = 'fooValue'
     * $query->filterByIdAttribFile('%fooValue%'); // WHERE id_attrib_file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idAttribFile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdAttribFile($idAttribFile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idAttribFile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idAttribFile)) {
                $idAttribFile = str_replace('*', '%', $idAttribFile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ID_ATTRIB_FILE, $idAttribFile, $comparison);
    }

    /**
     * Filter the query on the attrib_file column
     *
     * Example usage:
     * <code>
     * $query->filterByAttribFile('fooValue');   // WHERE attrib_file = 'fooValue'
     * $query->filterByAttribFile('%fooValue%'); // WHERE attrib_file LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attribFile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAttribFile($attribFile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attribFile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attribFile)) {
                $attribFile = str_replace('*', '%', $attribFile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ATTRIB_FILE, $attribFile, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive('fooValue');   // WHERE active = 'fooValue'
     * $query->filterByActive('%fooValue%'); // WHERE active LIKE '%fooValue%'
     * </code>
     *
     * @param     string $active The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($active)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $active)) {
                $active = str_replace('*', '%', $active);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the id_client_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByIdClientAnm('fooValue');   // WHERE id_client_ANM = 'fooValue'
     * $query->filterByIdClientAnm('%fooValue%'); // WHERE id_client_ANM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idClientAnm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdClientAnm($idClientAnm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idClientAnm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idClientAnm)) {
                $idClientAnm = str_replace('*', '%', $idClientAnm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ID_CLIENT_ANM, $idClientAnm, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the signataire_cao column
     *
     * Example usage:
     * <code>
     * $query->filterBySignataireCao('fooValue');   // WHERE signataire_cao = 'fooValue'
     * $query->filterBySignataireCao('%fooValue%'); // WHERE signataire_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signataireCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterBySignataireCao($signataireCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signataireCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signataireCao)) {
                $signataireCao = str_replace('*', '%', $signataireCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::SIGNATAIRE_CAO, $signataireCao, $comparison);
    }

    /**
     * Filter the query on the offset column
     *
     * Example usage:
     * <code>
     * $query->filterByOffset('fooValue');   // WHERE offset = 'fooValue'
     * $query->filterByOffset('%fooValue%'); // WHERE offset LIKE '%fooValue%'
     * </code>
     *
     * @param     string $offset The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByOffset($offset = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($offset)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $offset)) {
                $offset = str_replace('*', '%', $offset);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::OFFSET, $offset, $comparison);
    }

    /**
     * Filter the query on the sigle column
     *
     * Example usage:
     * <code>
     * $query->filterBySigle('fooValue');   // WHERE sigle = 'fooValue'
     * $query->filterBySigle('%fooValue%'); // WHERE sigle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterBySigle($sigle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigle)) {
                $sigle = str_replace('*', '%', $sigle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the tel column
     *
     * Example usage:
     * <code>
     * $query->filterByTel('fooValue');   // WHERE tel = 'fooValue'
     * $query->filterByTel('%fooValue%'); // WHERE tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByTel($tel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tel)) {
                $tel = str_replace('*', '%', $tel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::TEL, $tel, $comparison);
    }

    /**
     * Filter the query on the telecopie column
     *
     * Example usage:
     * <code>
     * $query->filterByTelecopie('fooValue');   // WHERE telecopie = 'fooValue'
     * $query->filterByTelecopie('%fooValue%'); // WHERE telecopie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telecopie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByTelecopie($telecopie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telecopie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telecopie)) {
                $telecopie = str_replace('*', '%', $telecopie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::TELECOPIE, $telecopie, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the affichage_entite column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageEntite('fooValue');   // WHERE affichage_entite = 'fooValue'
     * $query->filterByAffichageEntite('%fooValue%'); // WHERE affichage_entite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAffichageEntite($affichageEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageEntite)) {
                $affichageEntite = str_replace('*', '%', $affichageEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::AFFICHAGE_ENTITE, $affichageEntite, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the denomination_org_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgAr('fooValue');   // WHERE denomination_org_ar = 'fooValue'
     * $query->filterByDenominationOrgAr('%fooValue%'); // WHERE denomination_org_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgAr($denominationOrgAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgAr)) {
                $denominationOrgAr = str_replace('*', '%', $denominationOrgAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_AR, $denominationOrgAr, $comparison);
    }

    /**
     * Filter the query on the description_org_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgAr('fooValue');   // WHERE description_org_ar = 'fooValue'
     * $query->filterByDescriptionOrgAr('%fooValue%'); // WHERE description_org_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgAr($descriptionOrgAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgAr)) {
                $descriptionOrgAr = str_replace('*', '%', $descriptionOrgAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_AR, $descriptionOrgAr, $comparison);
    }

    /**
     * Filter the query on the adresse_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseAr('fooValue');   // WHERE adresse_ar = 'fooValue'
     * $query->filterByAdresseAr('%fooValue%'); // WHERE adresse_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseAr($adresseAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseAr)) {
                $adresseAr = str_replace('*', '%', $adresseAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_AR, $adresseAr, $comparison);
    }

    /**
     * Filter the query on the ville_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleAr('fooValue');   // WHERE ville_ar = 'fooValue'
     * $query->filterByVilleAr('%fooValue%'); // WHERE ville_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleAr($villeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeAr)) {
                $villeAr = str_replace('*', '%', $villeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_AR, $villeAr, $comparison);
    }

    /**
     * Filter the query on the adresse2_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Ar('fooValue');   // WHERE adresse2_ar = 'fooValue'
     * $query->filterByAdresse2Ar('%fooValue%'); // WHERE adresse2_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Ar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Ar($adresse2Ar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Ar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Ar)) {
                $adresse2Ar = str_replace('*', '%', $adresse2Ar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_AR, $adresse2Ar, $comparison);
    }

    /**
     * Filter the query on the pays_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysAr('fooValue');   // WHERE pays_ar = 'fooValue'
     * $query->filterByPaysAr('%fooValue%'); // WHERE pays_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysAr($paysAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysAr)) {
                $paysAr = str_replace('*', '%', $paysAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_AR, $paysAr, $comparison);
    }

    /**
     * Filter the query on the denomination_org_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgFr('fooValue');   // WHERE denomination_org_fr = 'fooValue'
     * $query->filterByDenominationOrgFr('%fooValue%'); // WHERE denomination_org_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgFr($denominationOrgFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgFr)) {
                $denominationOrgFr = str_replace('*', '%', $denominationOrgFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_FR, $denominationOrgFr, $comparison);
    }

    /**
     * Filter the query on the description_org_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgFr('fooValue');   // WHERE description_org_fr = 'fooValue'
     * $query->filterByDescriptionOrgFr('%fooValue%'); // WHERE description_org_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgFr($descriptionOrgFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgFr)) {
                $descriptionOrgFr = str_replace('*', '%', $descriptionOrgFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_FR, $descriptionOrgFr, $comparison);
    }

    /**
     * Filter the query on the adresse_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseFr('fooValue');   // WHERE adresse_fr = 'fooValue'
     * $query->filterByAdresseFr('%fooValue%'); // WHERE adresse_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseFr($adresseFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseFr)) {
                $adresseFr = str_replace('*', '%', $adresseFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_FR, $adresseFr, $comparison);
    }

    /**
     * Filter the query on the ville_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleFr('fooValue');   // WHERE ville_fr = 'fooValue'
     * $query->filterByVilleFr('%fooValue%'); // WHERE ville_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleFr($villeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeFr)) {
                $villeFr = str_replace('*', '%', $villeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_FR, $villeFr, $comparison);
    }

    /**
     * Filter the query on the adresse2_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Fr('fooValue');   // WHERE adresse2_fr = 'fooValue'
     * $query->filterByAdresse2Fr('%fooValue%'); // WHERE adresse2_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Fr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Fr($adresse2Fr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Fr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Fr)) {
                $adresse2Fr = str_replace('*', '%', $adresse2Fr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_FR, $adresse2Fr, $comparison);
    }

    /**
     * Filter the query on the pays_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysFr('fooValue');   // WHERE pays_fr = 'fooValue'
     * $query->filterByPaysFr('%fooValue%'); // WHERE pays_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysFr($paysFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysFr)) {
                $paysFr = str_replace('*', '%', $paysFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_FR, $paysFr, $comparison);
    }

    /**
     * Filter the query on the denomination_org_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgEs('fooValue');   // WHERE denomination_org_es = 'fooValue'
     * $query->filterByDenominationOrgEs('%fooValue%'); // WHERE denomination_org_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgEs($denominationOrgEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgEs)) {
                $denominationOrgEs = str_replace('*', '%', $denominationOrgEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_ES, $denominationOrgEs, $comparison);
    }

    /**
     * Filter the query on the description_org_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgEs('fooValue');   // WHERE description_org_es = 'fooValue'
     * $query->filterByDescriptionOrgEs('%fooValue%'); // WHERE description_org_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgEs($descriptionOrgEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgEs)) {
                $descriptionOrgEs = str_replace('*', '%', $descriptionOrgEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_ES, $descriptionOrgEs, $comparison);
    }

    /**
     * Filter the query on the adresse_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEs('fooValue');   // WHERE adresse_es = 'fooValue'
     * $query->filterByAdresseEs('%fooValue%'); // WHERE adresse_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseEs($adresseEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEs)) {
                $adresseEs = str_replace('*', '%', $adresseEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_ES, $adresseEs, $comparison);
    }

    /**
     * Filter the query on the ville_es column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleEs('fooValue');   // WHERE ville_es = 'fooValue'
     * $query->filterByVilleEs('%fooValue%'); // WHERE ville_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleEs($villeEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeEs)) {
                $villeEs = str_replace('*', '%', $villeEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_ES, $villeEs, $comparison);
    }

    /**
     * Filter the query on the adresse2_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Es('fooValue');   // WHERE adresse2_es = 'fooValue'
     * $query->filterByAdresse2Es('%fooValue%'); // WHERE adresse2_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Es The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Es($adresse2Es = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Es)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Es)) {
                $adresse2Es = str_replace('*', '%', $adresse2Es);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_ES, $adresse2Es, $comparison);
    }

    /**
     * Filter the query on the pays_es column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysEs('fooValue');   // WHERE pays_es = 'fooValue'
     * $query->filterByPaysEs('%fooValue%'); // WHERE pays_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysEs($paysEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysEs)) {
                $paysEs = str_replace('*', '%', $paysEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_ES, $paysEs, $comparison);
    }

    /**
     * Filter the query on the denomination_org_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgEn('fooValue');   // WHERE denomination_org_en = 'fooValue'
     * $query->filterByDenominationOrgEn('%fooValue%'); // WHERE denomination_org_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgEn($denominationOrgEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgEn)) {
                $denominationOrgEn = str_replace('*', '%', $denominationOrgEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_EN, $denominationOrgEn, $comparison);
    }

    /**
     * Filter the query on the description_org_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgEn('fooValue');   // WHERE description_org_en = 'fooValue'
     * $query->filterByDescriptionOrgEn('%fooValue%'); // WHERE description_org_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgEn($descriptionOrgEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgEn)) {
                $descriptionOrgEn = str_replace('*', '%', $descriptionOrgEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_EN, $descriptionOrgEn, $comparison);
    }

    /**
     * Filter the query on the adresse_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEn('fooValue');   // WHERE adresse_en = 'fooValue'
     * $query->filterByAdresseEn('%fooValue%'); // WHERE adresse_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseEn($adresseEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEn)) {
                $adresseEn = str_replace('*', '%', $adresseEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_EN, $adresseEn, $comparison);
    }

    /**
     * Filter the query on the ville_en column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleEn('fooValue');   // WHERE ville_en = 'fooValue'
     * $query->filterByVilleEn('%fooValue%'); // WHERE ville_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleEn($villeEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeEn)) {
                $villeEn = str_replace('*', '%', $villeEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_EN, $villeEn, $comparison);
    }

    /**
     * Filter the query on the adresse2_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2En('fooValue');   // WHERE adresse2_en = 'fooValue'
     * $query->filterByAdresse2En('%fooValue%'); // WHERE adresse2_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2En The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2En($adresse2En = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2En)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2En)) {
                $adresse2En = str_replace('*', '%', $adresse2En);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_EN, $adresse2En, $comparison);
    }

    /**
     * Filter the query on the pays_en column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysEn('fooValue');   // WHERE pays_en = 'fooValue'
     * $query->filterByPaysEn('%fooValue%'); // WHERE pays_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysEn($paysEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysEn)) {
                $paysEn = str_replace('*', '%', $paysEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_EN, $paysEn, $comparison);
    }

    /**
     * Filter the query on the denomination_org_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgSu('fooValue');   // WHERE denomination_org_su = 'fooValue'
     * $query->filterByDenominationOrgSu('%fooValue%'); // WHERE denomination_org_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgSu($denominationOrgSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgSu)) {
                $denominationOrgSu = str_replace('*', '%', $denominationOrgSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_SU, $denominationOrgSu, $comparison);
    }

    /**
     * Filter the query on the description_org_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgSu('fooValue');   // WHERE description_org_su = 'fooValue'
     * $query->filterByDescriptionOrgSu('%fooValue%'); // WHERE description_org_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgSu($descriptionOrgSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgSu)) {
                $descriptionOrgSu = str_replace('*', '%', $descriptionOrgSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_SU, $descriptionOrgSu, $comparison);
    }

    /**
     * Filter the query on the adresse_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSu('fooValue');   // WHERE adresse_su = 'fooValue'
     * $query->filterByAdresseSu('%fooValue%'); // WHERE adresse_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseSu($adresseSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSu)) {
                $adresseSu = str_replace('*', '%', $adresseSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_SU, $adresseSu, $comparison);
    }

    /**
     * Filter the query on the ville_su column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleSu('fooValue');   // WHERE ville_su = 'fooValue'
     * $query->filterByVilleSu('%fooValue%'); // WHERE ville_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleSu($villeSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeSu)) {
                $villeSu = str_replace('*', '%', $villeSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_SU, $villeSu, $comparison);
    }

    /**
     * Filter the query on the adresse2_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Su('fooValue');   // WHERE adresse2_su = 'fooValue'
     * $query->filterByAdresse2Su('%fooValue%'); // WHERE adresse2_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Su The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Su($adresse2Su = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Su)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Su)) {
                $adresse2Su = str_replace('*', '%', $adresse2Su);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_SU, $adresse2Su, $comparison);
    }

    /**
     * Filter the query on the pays_su column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysSu('fooValue');   // WHERE pays_su = 'fooValue'
     * $query->filterByPaysSu('%fooValue%'); // WHERE pays_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysSu($paysSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysSu)) {
                $paysSu = str_replace('*', '%', $paysSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_SU, $paysSu, $comparison);
    }

    /**
     * Filter the query on the denomination_org_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgDu('fooValue');   // WHERE denomination_org_du = 'fooValue'
     * $query->filterByDenominationOrgDu('%fooValue%'); // WHERE denomination_org_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgDu($denominationOrgDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgDu)) {
                $denominationOrgDu = str_replace('*', '%', $denominationOrgDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_DU, $denominationOrgDu, $comparison);
    }

    /**
     * Filter the query on the description_org_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgDu('fooValue');   // WHERE description_org_du = 'fooValue'
     * $query->filterByDescriptionOrgDu('%fooValue%'); // WHERE description_org_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgDu($descriptionOrgDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgDu)) {
                $descriptionOrgDu = str_replace('*', '%', $descriptionOrgDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_DU, $descriptionOrgDu, $comparison);
    }

    /**
     * Filter the query on the adresse_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDu('fooValue');   // WHERE adresse_du = 'fooValue'
     * $query->filterByAdresseDu('%fooValue%'); // WHERE adresse_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseDu($adresseDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDu)) {
                $adresseDu = str_replace('*', '%', $adresseDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_DU, $adresseDu, $comparison);
    }

    /**
     * Filter the query on the ville_du column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleDu('fooValue');   // WHERE ville_du = 'fooValue'
     * $query->filterByVilleDu('%fooValue%'); // WHERE ville_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleDu($villeDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeDu)) {
                $villeDu = str_replace('*', '%', $villeDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_DU, $villeDu, $comparison);
    }

    /**
     * Filter the query on the adresse2_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Du('fooValue');   // WHERE adresse2_du = 'fooValue'
     * $query->filterByAdresse2Du('%fooValue%'); // WHERE adresse2_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Du The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Du($adresse2Du = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Du)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Du)) {
                $adresse2Du = str_replace('*', '%', $adresse2Du);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_DU, $adresse2Du, $comparison);
    }

    /**
     * Filter the query on the pays_du column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysDu('fooValue');   // WHERE pays_du = 'fooValue'
     * $query->filterByPaysDu('%fooValue%'); // WHERE pays_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysDu($paysDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysDu)) {
                $paysDu = str_replace('*', '%', $paysDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_DU, $paysDu, $comparison);
    }

    /**
     * Filter the query on the denomination_org_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgCz('fooValue');   // WHERE denomination_org_cz = 'fooValue'
     * $query->filterByDenominationOrgCz('%fooValue%'); // WHERE denomination_org_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgCz($denominationOrgCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgCz)) {
                $denominationOrgCz = str_replace('*', '%', $denominationOrgCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_CZ, $denominationOrgCz, $comparison);
    }

    /**
     * Filter the query on the description_org_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgCz('fooValue');   // WHERE description_org_cz = 'fooValue'
     * $query->filterByDescriptionOrgCz('%fooValue%'); // WHERE description_org_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgCz($descriptionOrgCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgCz)) {
                $descriptionOrgCz = str_replace('*', '%', $descriptionOrgCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_CZ, $descriptionOrgCz, $comparison);
    }

    /**
     * Filter the query on the adresse_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseCz('fooValue');   // WHERE adresse_cz = 'fooValue'
     * $query->filterByAdresseCz('%fooValue%'); // WHERE adresse_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseCz($adresseCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseCz)) {
                $adresseCz = str_replace('*', '%', $adresseCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_CZ, $adresseCz, $comparison);
    }

    /**
     * Filter the query on the ville_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleCz('fooValue');   // WHERE ville_cz = 'fooValue'
     * $query->filterByVilleCz('%fooValue%'); // WHERE ville_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleCz($villeCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeCz)) {
                $villeCz = str_replace('*', '%', $villeCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_CZ, $villeCz, $comparison);
    }

    /**
     * Filter the query on the adresse2_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2Cz('fooValue');   // WHERE adresse2_cz = 'fooValue'
     * $query->filterByAdresse2Cz('%fooValue%'); // WHERE adresse2_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2Cz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2Cz($adresse2Cz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2Cz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2Cz)) {
                $adresse2Cz = str_replace('*', '%', $adresse2Cz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_CZ, $adresse2Cz, $comparison);
    }

    /**
     * Filter the query on the pays_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysCz('fooValue');   // WHERE pays_cz = 'fooValue'
     * $query->filterByPaysCz('%fooValue%'); // WHERE pays_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysCz($paysCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysCz)) {
                $paysCz = str_replace('*', '%', $paysCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_CZ, $paysCz, $comparison);
    }

    /**
     * Filter the query on the denomination_org_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationOrgIt('fooValue');   // WHERE denomination_org_it = 'fooValue'
     * $query->filterByDenominationOrgIt('%fooValue%'); // WHERE denomination_org_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationOrgIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDenominationOrgIt($denominationOrgIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationOrgIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationOrgIt)) {
                $denominationOrgIt = str_replace('*', '%', $denominationOrgIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DENOMINATION_ORG_IT, $denominationOrgIt, $comparison);
    }

    /**
     * Filter the query on the description_org_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionOrgIt('fooValue');   // WHERE description_org_it = 'fooValue'
     * $query->filterByDescriptionOrgIt('%fooValue%'); // WHERE description_org_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionOrgIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDescriptionOrgIt($descriptionOrgIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionOrgIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionOrgIt)) {
                $descriptionOrgIt = str_replace('*', '%', $descriptionOrgIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DESCRIPTION_ORG_IT, $descriptionOrgIt, $comparison);
    }

    /**
     * Filter the query on the adresse_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseIt('fooValue');   // WHERE adresse_it = 'fooValue'
     * $query->filterByAdresseIt('%fooValue%'); // WHERE adresse_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresseIt($adresseIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseIt)) {
                $adresseIt = str_replace('*', '%', $adresseIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE_IT, $adresseIt, $comparison);
    }

    /**
     * Filter the query on the ville_it column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleIt('fooValue');   // WHERE ville_it = 'fooValue'
     * $query->filterByVilleIt('%fooValue%'); // WHERE ville_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByVilleIt($villeIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeIt)) {
                $villeIt = str_replace('*', '%', $villeIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::VILLE_IT, $villeIt, $comparison);
    }

    /**
     * Filter the query on the adresse2_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2It('fooValue');   // WHERE adresse2_it = 'fooValue'
     * $query->filterByAdresse2It('%fooValue%'); // WHERE adresse2_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2It The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAdresse2It($adresse2It = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2It)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2It)) {
                $adresse2It = str_replace('*', '%', $adresse2It);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ADRESSE2_IT, $adresse2It, $comparison);
    }

    /**
     * Filter the query on the pays_it column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysIt('fooValue');   // WHERE pays_it = 'fooValue'
     * $query->filterByPaysIt('%fooValue%'); // WHERE pays_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByPaysIt($paysIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysIt)) {
                $paysIt = str_replace('*', '%', $paysIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::PAYS_IT, $paysIt, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the complement column
     *
     * Example usage:
     * <code>
     * $query->filterByComplement('fooValue');   // WHERE complement = 'fooValue'
     * $query->filterByComplement('%fooValue%'); // WHERE complement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByComplement($complement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complement)) {
                $complement = str_replace('*', '%', $complement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::COMPLEMENT, $complement, $comparison);
    }

    /**
     * Filter the query on the moniteur_provenance column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurProvenance(1234); // WHERE moniteur_provenance = 1234
     * $query->filterByMoniteurProvenance(array(12, 34)); // WHERE moniteur_provenance IN (12, 34)
     * $query->filterByMoniteurProvenance(array('min' => 12)); // WHERE moniteur_provenance >= 12
     * $query->filterByMoniteurProvenance(array('max' => 12)); // WHERE moniteur_provenance <= 12
     * </code>
     *
     * @param     mixed $moniteurProvenance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByMoniteurProvenance($moniteurProvenance = null, $comparison = null)
    {
        if (is_array($moniteurProvenance)) {
            $useMinMax = false;
            if (isset($moniteurProvenance['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::MONITEUR_PROVENANCE, $moniteurProvenance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($moniteurProvenance['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::MONITEUR_PROVENANCE, $moniteurProvenance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::MONITEUR_PROVENANCE, $moniteurProvenance, $comparison);
    }

    /**
     * Filter the query on the code_acces_logiciel column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeAccesLogiciel('fooValue');   // WHERE code_acces_logiciel = 'fooValue'
     * $query->filterByCodeAccesLogiciel('%fooValue%'); // WHERE code_acces_logiciel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeAccesLogiciel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByCodeAccesLogiciel($codeAccesLogiciel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeAccesLogiciel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeAccesLogiciel)) {
                $codeAccesLogiciel = str_replace('*', '%', $codeAccesLogiciel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::CODE_ACCES_LOGICIEL, $codeAccesLogiciel, $comparison);
    }

    /**
     * Filter the query on the decalage_horaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDecalageHoraire('fooValue');   // WHERE decalage_horaire = 'fooValue'
     * $query->filterByDecalageHoraire('%fooValue%'); // WHERE decalage_horaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decalageHoraire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByDecalageHoraire($decalageHoraire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decalageHoraire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decalageHoraire)) {
                $decalageHoraire = str_replace('*', '%', $decalageHoraire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::DECALAGE_HORAIRE, $decalageHoraire, $comparison);
    }

    /**
     * Filter the query on the lieu_residence column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuResidence('fooValue');   // WHERE lieu_residence = 'fooValue'
     * $query->filterByLieuResidence('%fooValue%'); // WHERE lieu_residence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuResidence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByLieuResidence($lieuResidence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuResidence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuResidence)) {
                $lieuResidence = str_replace('*', '%', $lieuResidence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::LIEU_RESIDENCE, $lieuResidence, $comparison);
    }

    /**
     * Filter the query on the activation_fuseau_horaire column
     *
     * Example usage:
     * <code>
     * $query->filterByActivationFuseauHoraire('fooValue');   // WHERE activation_fuseau_horaire = 'fooValue'
     * $query->filterByActivationFuseauHoraire('%fooValue%'); // WHERE activation_fuseau_horaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activationFuseauHoraire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByActivationFuseauHoraire($activationFuseauHoraire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activationFuseauHoraire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activationFuseauHoraire)) {
                $activationFuseauHoraire = str_replace('*', '%', $activationFuseauHoraire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE, $activationFuseauHoraire, $comparison);
    }

    /**
     * Filter the query on the alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerte('fooValue');   // WHERE alerte = 'fooValue'
     * $query->filterByAlerte('%fooValue%'); // WHERE alerte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByAlerte($alerte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerte)) {
                $alerte = str_replace('*', '%', $alerte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ALERTE, $alerte, $comparison);
    }

    /**
     * Filter the query on the ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ordre = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ordre IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ordre >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ordre <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(CommonOrganismePeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(CommonOrganismePeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the URL_INTERFACE_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlInterfaceAnm('fooValue');   // WHERE URL_INTERFACE_ANM = 'fooValue'
     * $query->filterByUrlInterfaceAnm('%fooValue%'); // WHERE URL_INTERFACE_ANM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlInterfaceAnm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function filterByUrlInterfaceAnm($urlInterfaceAnm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlInterfaceAnm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlInterfaceAnm)) {
                $urlInterfaceAnm = str_replace('*', '%', $urlInterfaceAnm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOrganismePeer::URL_INTERFACE_ANM, $urlInterfaceAnm, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOrganisme $commonOrganisme Object to remove from the list of results
     *
     * @return CommonOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonOrganisme = null)
    {
        if ($commonOrganisme) {
            $this->addUsingAlias(CommonOrganismePeer::ID, $commonOrganisme->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
