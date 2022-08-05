<?php


/**
 * Base class that represents a query for the 'Chorus_Fiche_Navette' table.
 *
 * 
 *
 * @method CommonChorusFicheNavetteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonChorusFicheNavetteQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChorusFicheNavetteQuery orderByIdChorusEchange($order = Criteria::ASC) Order by the id_chorus_echange column
 * @method CommonChorusFicheNavetteQuery orderByRpa($order = Criteria::ASC) Order by the rpa column
 * @method CommonChorusFicheNavetteQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonChorusFicheNavetteQuery orderByFicheImmobilisation($order = Criteria::ASC) Order by the fiche_immobilisation column
 * @method CommonChorusFicheNavetteQuery orderByAttentePj($order = Criteria::ASC) Order by the attente_pj column
 * @method CommonChorusFicheNavetteQuery orderByMarchePartage($order = Criteria::ASC) Order by the marche_partage column
 * @method CommonChorusFicheNavetteQuery orderByIdAccordCadre($order = Criteria::ASC) Order by the id_accord_cadre column
 * @method CommonChorusFicheNavetteQuery orderByLibAccordCadre($order = Criteria::ASC) Order by the lib_accord_cadre column
 * @method CommonChorusFicheNavetteQuery orderByAnneeCreationAccordCadre($order = Criteria::ASC) Order by the annee_creation_accord_cadre column
 * @method CommonChorusFicheNavetteQuery orderByMontantHt($order = Criteria::ASC) Order by the montant_ht column
 * @method CommonChorusFicheNavetteQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method CommonChorusFicheNavetteQuery orderByVisaAccf($order = Criteria::ASC) Order by the visa_accf column
 * @method CommonChorusFicheNavetteQuery orderByVisaPrefet($order = Criteria::ASC) Order by the visa_prefet column
 * @method CommonChorusFicheNavetteQuery orderByRetenueGarantie($order = Criteria::ASC) Order by the retenue_garantie column
 * @method CommonChorusFicheNavetteQuery orderByMontantMini($order = Criteria::ASC) Order by the montant_mini column
 * @method CommonChorusFicheNavetteQuery orderByMontantMaxi($order = Criteria::ASC) Order by the montant_maxi column
 * @method CommonChorusFicheNavetteQuery orderByMontantForfaitaire($order = Criteria::ASC) Order by the montant_forfaitaire column
 * @method CommonChorusFicheNavetteQuery orderByMontantBc($order = Criteria::ASC) Order by the montant_bc column
 * @method CommonChorusFicheNavetteQuery orderByTauxTva($order = Criteria::ASC) Order by the taux_tva column
 * @method CommonChorusFicheNavetteQuery orderByCentreCout($order = Criteria::ASC) Order by the centre_cout column
 * @method CommonChorusFicheNavetteQuery orderByCentreFinancier($order = Criteria::ASC) Order by the centre_financier column
 * @method CommonChorusFicheNavetteQuery orderByActivite($order = Criteria::ASC) Order by the activite column
 * @method CommonChorusFicheNavetteQuery orderByDomaineFonctionnel($order = Criteria::ASC) Order by the domaine_fonctionnel column
 * @method CommonChorusFicheNavetteQuery orderByFond($order = Criteria::ASC) Order by the fond column
 * @method CommonChorusFicheNavetteQuery orderByLocalisationInterministerielle($order = Criteria::ASC) Order by the localisation_interministerielle column
 * @method CommonChorusFicheNavetteQuery orderByNature($order = Criteria::ASC) Order by the nature column
 * @method CommonChorusFicheNavetteQuery orderByAxeMinisteriel1($order = Criteria::ASC) Order by the axe_ministeriel1 column
 * @method CommonChorusFicheNavetteQuery orderByProjetAnalytique($order = Criteria::ASC) Order by the projet_analytique column
 * @method CommonChorusFicheNavetteQuery orderByLocalisationMinisterielle($order = Criteria::ASC) Order by the localisation_ministerielle column
 * @method CommonChorusFicheNavetteQuery orderByAxeMinisteriel2($order = Criteria::ASC) Order by the axe_ministeriel2 column
 * @method CommonChorusFicheNavetteQuery orderByRemarques($order = Criteria::ASC) Order by the remarques column
 * @method CommonChorusFicheNavetteQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonChorusFicheNavetteQuery orderByNomDocument($order = Criteria::ASC) Order by the nom_document column
 *
 * @method CommonChorusFicheNavetteQuery groupById() Group by the id column
 * @method CommonChorusFicheNavetteQuery groupByOrganisme() Group by the organisme column
 * @method CommonChorusFicheNavetteQuery groupByIdChorusEchange() Group by the id_chorus_echange column
 * @method CommonChorusFicheNavetteQuery groupByRpa() Group by the rpa column
 * @method CommonChorusFicheNavetteQuery groupByObjet() Group by the objet column
 * @method CommonChorusFicheNavetteQuery groupByFicheImmobilisation() Group by the fiche_immobilisation column
 * @method CommonChorusFicheNavetteQuery groupByAttentePj() Group by the attente_pj column
 * @method CommonChorusFicheNavetteQuery groupByMarchePartage() Group by the marche_partage column
 * @method CommonChorusFicheNavetteQuery groupByIdAccordCadre() Group by the id_accord_cadre column
 * @method CommonChorusFicheNavetteQuery groupByLibAccordCadre() Group by the lib_accord_cadre column
 * @method CommonChorusFicheNavetteQuery groupByAnneeCreationAccordCadre() Group by the annee_creation_accord_cadre column
 * @method CommonChorusFicheNavetteQuery groupByMontantHt() Group by the montant_ht column
 * @method CommonChorusFicheNavetteQuery groupByReconductible() Group by the reconductible column
 * @method CommonChorusFicheNavetteQuery groupByVisaAccf() Group by the visa_accf column
 * @method CommonChorusFicheNavetteQuery groupByVisaPrefet() Group by the visa_prefet column
 * @method CommonChorusFicheNavetteQuery groupByRetenueGarantie() Group by the retenue_garantie column
 * @method CommonChorusFicheNavetteQuery groupByMontantMini() Group by the montant_mini column
 * @method CommonChorusFicheNavetteQuery groupByMontantMaxi() Group by the montant_maxi column
 * @method CommonChorusFicheNavetteQuery groupByMontantForfaitaire() Group by the montant_forfaitaire column
 * @method CommonChorusFicheNavetteQuery groupByMontantBc() Group by the montant_bc column
 * @method CommonChorusFicheNavetteQuery groupByTauxTva() Group by the taux_tva column
 * @method CommonChorusFicheNavetteQuery groupByCentreCout() Group by the centre_cout column
 * @method CommonChorusFicheNavetteQuery groupByCentreFinancier() Group by the centre_financier column
 * @method CommonChorusFicheNavetteQuery groupByActivite() Group by the activite column
 * @method CommonChorusFicheNavetteQuery groupByDomaineFonctionnel() Group by the domaine_fonctionnel column
 * @method CommonChorusFicheNavetteQuery groupByFond() Group by the fond column
 * @method CommonChorusFicheNavetteQuery groupByLocalisationInterministerielle() Group by the localisation_interministerielle column
 * @method CommonChorusFicheNavetteQuery groupByNature() Group by the nature column
 * @method CommonChorusFicheNavetteQuery groupByAxeMinisteriel1() Group by the axe_ministeriel1 column
 * @method CommonChorusFicheNavetteQuery groupByProjetAnalytique() Group by the projet_analytique column
 * @method CommonChorusFicheNavetteQuery groupByLocalisationMinisterielle() Group by the localisation_ministerielle column
 * @method CommonChorusFicheNavetteQuery groupByAxeMinisteriel2() Group by the axe_ministeriel2 column
 * @method CommonChorusFicheNavetteQuery groupByRemarques() Group by the remarques column
 * @method CommonChorusFicheNavetteQuery groupByIdDocument() Group by the id_document column
 * @method CommonChorusFicheNavetteQuery groupByNomDocument() Group by the nom_document column
 *
 * @method CommonChorusFicheNavetteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusFicheNavetteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusFicheNavetteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusFicheNavette findOne(PropelPDO $con = null) Return the first CommonChorusFicheNavette matching the query
 * @method CommonChorusFicheNavette findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusFicheNavette matching the query, or a new CommonChorusFicheNavette object populated from the query conditions when no match is found
 *
 * @method CommonChorusFicheNavette findOneById(int $id) Return the first CommonChorusFicheNavette filtered by the id column
 * @method CommonChorusFicheNavette findOneByOrganisme(string $organisme) Return the first CommonChorusFicheNavette filtered by the organisme column
 * @method CommonChorusFicheNavette findOneByIdChorusEchange(string $id_chorus_echange) Return the first CommonChorusFicheNavette filtered by the id_chorus_echange column
 * @method CommonChorusFicheNavette findOneByRpa(string $rpa) Return the first CommonChorusFicheNavette filtered by the rpa column
 * @method CommonChorusFicheNavette findOneByObjet(string $objet) Return the first CommonChorusFicheNavette filtered by the objet column
 * @method CommonChorusFicheNavette findOneByFicheImmobilisation(string $fiche_immobilisation) Return the first CommonChorusFicheNavette filtered by the fiche_immobilisation column
 * @method CommonChorusFicheNavette findOneByAttentePj(string $attente_pj) Return the first CommonChorusFicheNavette filtered by the attente_pj column
 * @method CommonChorusFicheNavette findOneByMarchePartage(string $marche_partage) Return the first CommonChorusFicheNavette filtered by the marche_partage column
 * @method CommonChorusFicheNavette findOneByIdAccordCadre(string $id_accord_cadre) Return the first CommonChorusFicheNavette filtered by the id_accord_cadre column
 * @method CommonChorusFicheNavette findOneByLibAccordCadre(string $lib_accord_cadre) Return the first CommonChorusFicheNavette filtered by the lib_accord_cadre column
 * @method CommonChorusFicheNavette findOneByAnneeCreationAccordCadre(string $annee_creation_accord_cadre) Return the first CommonChorusFicheNavette filtered by the annee_creation_accord_cadre column
 * @method CommonChorusFicheNavette findOneByMontantHt(string $montant_ht) Return the first CommonChorusFicheNavette filtered by the montant_ht column
 * @method CommonChorusFicheNavette findOneByReconductible(string $reconductible) Return the first CommonChorusFicheNavette filtered by the reconductible column
 * @method CommonChorusFicheNavette findOneByVisaAccf(string $visa_accf) Return the first CommonChorusFicheNavette filtered by the visa_accf column
 * @method CommonChorusFicheNavette findOneByVisaPrefet(string $visa_prefet) Return the first CommonChorusFicheNavette filtered by the visa_prefet column
 * @method CommonChorusFicheNavette findOneByRetenueGarantie(string $retenue_garantie) Return the first CommonChorusFicheNavette filtered by the retenue_garantie column
 * @method CommonChorusFicheNavette findOneByMontantMini(string $montant_mini) Return the first CommonChorusFicheNavette filtered by the montant_mini column
 * @method CommonChorusFicheNavette findOneByMontantMaxi(string $montant_maxi) Return the first CommonChorusFicheNavette filtered by the montant_maxi column
 * @method CommonChorusFicheNavette findOneByMontantForfaitaire(string $montant_forfaitaire) Return the first CommonChorusFicheNavette filtered by the montant_forfaitaire column
 * @method CommonChorusFicheNavette findOneByMontantBc(string $montant_bc) Return the first CommonChorusFicheNavette filtered by the montant_bc column
 * @method CommonChorusFicheNavette findOneByTauxTva(string $taux_tva) Return the first CommonChorusFicheNavette filtered by the taux_tva column
 * @method CommonChorusFicheNavette findOneByCentreCout(string $centre_cout) Return the first CommonChorusFicheNavette filtered by the centre_cout column
 * @method CommonChorusFicheNavette findOneByCentreFinancier(string $centre_financier) Return the first CommonChorusFicheNavette filtered by the centre_financier column
 * @method CommonChorusFicheNavette findOneByActivite(string $activite) Return the first CommonChorusFicheNavette filtered by the activite column
 * @method CommonChorusFicheNavette findOneByDomaineFonctionnel(string $domaine_fonctionnel) Return the first CommonChorusFicheNavette filtered by the domaine_fonctionnel column
 * @method CommonChorusFicheNavette findOneByFond(string $fond) Return the first CommonChorusFicheNavette filtered by the fond column
 * @method CommonChorusFicheNavette findOneByLocalisationInterministerielle(string $localisation_interministerielle) Return the first CommonChorusFicheNavette filtered by the localisation_interministerielle column
 * @method CommonChorusFicheNavette findOneByNature(string $nature) Return the first CommonChorusFicheNavette filtered by the nature column
 * @method CommonChorusFicheNavette findOneByAxeMinisteriel1(string $axe_ministeriel1) Return the first CommonChorusFicheNavette filtered by the axe_ministeriel1 column
 * @method CommonChorusFicheNavette findOneByProjetAnalytique(string $projet_analytique) Return the first CommonChorusFicheNavette filtered by the projet_analytique column
 * @method CommonChorusFicheNavette findOneByLocalisationMinisterielle(string $localisation_ministerielle) Return the first CommonChorusFicheNavette filtered by the localisation_ministerielle column
 * @method CommonChorusFicheNavette findOneByAxeMinisteriel2(string $axe_ministeriel2) Return the first CommonChorusFicheNavette filtered by the axe_ministeriel2 column
 * @method CommonChorusFicheNavette findOneByRemarques(string $remarques) Return the first CommonChorusFicheNavette filtered by the remarques column
 * @method CommonChorusFicheNavette findOneByIdDocument(int $id_document) Return the first CommonChorusFicheNavette filtered by the id_document column
 * @method CommonChorusFicheNavette findOneByNomDocument(string $nom_document) Return the first CommonChorusFicheNavette filtered by the nom_document column
 *
 * @method array findById(int $id) Return CommonChorusFicheNavette objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonChorusFicheNavette objects filtered by the organisme column
 * @method array findByIdChorusEchange(string $id_chorus_echange) Return CommonChorusFicheNavette objects filtered by the id_chorus_echange column
 * @method array findByRpa(string $rpa) Return CommonChorusFicheNavette objects filtered by the rpa column
 * @method array findByObjet(string $objet) Return CommonChorusFicheNavette objects filtered by the objet column
 * @method array findByFicheImmobilisation(string $fiche_immobilisation) Return CommonChorusFicheNavette objects filtered by the fiche_immobilisation column
 * @method array findByAttentePj(string $attente_pj) Return CommonChorusFicheNavette objects filtered by the attente_pj column
 * @method array findByMarchePartage(string $marche_partage) Return CommonChorusFicheNavette objects filtered by the marche_partage column
 * @method array findByIdAccordCadre(string $id_accord_cadre) Return CommonChorusFicheNavette objects filtered by the id_accord_cadre column
 * @method array findByLibAccordCadre(string $lib_accord_cadre) Return CommonChorusFicheNavette objects filtered by the lib_accord_cadre column
 * @method array findByAnneeCreationAccordCadre(string $annee_creation_accord_cadre) Return CommonChorusFicheNavette objects filtered by the annee_creation_accord_cadre column
 * @method array findByMontantHt(string $montant_ht) Return CommonChorusFicheNavette objects filtered by the montant_ht column
 * @method array findByReconductible(string $reconductible) Return CommonChorusFicheNavette objects filtered by the reconductible column
 * @method array findByVisaAccf(string $visa_accf) Return CommonChorusFicheNavette objects filtered by the visa_accf column
 * @method array findByVisaPrefet(string $visa_prefet) Return CommonChorusFicheNavette objects filtered by the visa_prefet column
 * @method array findByRetenueGarantie(string $retenue_garantie) Return CommonChorusFicheNavette objects filtered by the retenue_garantie column
 * @method array findByMontantMini(string $montant_mini) Return CommonChorusFicheNavette objects filtered by the montant_mini column
 * @method array findByMontantMaxi(string $montant_maxi) Return CommonChorusFicheNavette objects filtered by the montant_maxi column
 * @method array findByMontantForfaitaire(string $montant_forfaitaire) Return CommonChorusFicheNavette objects filtered by the montant_forfaitaire column
 * @method array findByMontantBc(string $montant_bc) Return CommonChorusFicheNavette objects filtered by the montant_bc column
 * @method array findByTauxTva(string $taux_tva) Return CommonChorusFicheNavette objects filtered by the taux_tva column
 * @method array findByCentreCout(string $centre_cout) Return CommonChorusFicheNavette objects filtered by the centre_cout column
 * @method array findByCentreFinancier(string $centre_financier) Return CommonChorusFicheNavette objects filtered by the centre_financier column
 * @method array findByActivite(string $activite) Return CommonChorusFicheNavette objects filtered by the activite column
 * @method array findByDomaineFonctionnel(string $domaine_fonctionnel) Return CommonChorusFicheNavette objects filtered by the domaine_fonctionnel column
 * @method array findByFond(string $fond) Return CommonChorusFicheNavette objects filtered by the fond column
 * @method array findByLocalisationInterministerielle(string $localisation_interministerielle) Return CommonChorusFicheNavette objects filtered by the localisation_interministerielle column
 * @method array findByNature(string $nature) Return CommonChorusFicheNavette objects filtered by the nature column
 * @method array findByAxeMinisteriel1(string $axe_ministeriel1) Return CommonChorusFicheNavette objects filtered by the axe_ministeriel1 column
 * @method array findByProjetAnalytique(string $projet_analytique) Return CommonChorusFicheNavette objects filtered by the projet_analytique column
 * @method array findByLocalisationMinisterielle(string $localisation_ministerielle) Return CommonChorusFicheNavette objects filtered by the localisation_ministerielle column
 * @method array findByAxeMinisteriel2(string $axe_ministeriel2) Return CommonChorusFicheNavette objects filtered by the axe_ministeriel2 column
 * @method array findByRemarques(string $remarques) Return CommonChorusFicheNavette objects filtered by the remarques column
 * @method array findByIdDocument(int $id_document) Return CommonChorusFicheNavette objects filtered by the id_document column
 * @method array findByNomDocument(string $nom_document) Return CommonChorusFicheNavette objects filtered by the nom_document column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusFicheNavetteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusFicheNavetteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusFicheNavette', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusFicheNavetteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusFicheNavetteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusFicheNavetteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusFicheNavetteQuery) {
            return $criteria;
        }
        $query = new CommonChorusFicheNavetteQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonChorusFicheNavette|CommonChorusFicheNavette[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusFicheNavettePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusFicheNavettePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonChorusFicheNavette A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_chorus_echange`, `rpa`, `objet`, `fiche_immobilisation`, `attente_pj`, `marche_partage`, `id_accord_cadre`, `lib_accord_cadre`, `annee_creation_accord_cadre`, `montant_ht`, `reconductible`, `visa_accf`, `visa_prefet`, `retenue_garantie`, `montant_mini`, `montant_maxi`, `montant_forfaitaire`, `montant_bc`, `taux_tva`, `centre_cout`, `centre_financier`, `activite`, `domaine_fonctionnel`, `fond`, `localisation_interministerielle`, `nature`, `axe_ministeriel1`, `projet_analytique`, `localisation_ministerielle`, `axe_ministeriel2`, `remarques`, `id_document`, `nom_document` FROM `Chorus_Fiche_Navette` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonChorusFicheNavette();
            $obj->hydrate($row);
            CommonChorusFicheNavettePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonChorusFicheNavette|CommonChorusFicheNavette[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonChorusFicheNavette[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChorusFicheNavettePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChorusFicheNavettePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChorusFicheNavettePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChorusFicheNavettePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonChorusFicheNavettePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonChorusFicheNavettePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_chorus_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdChorusEchange('fooValue');   // WHERE id_chorus_echange = 'fooValue'
     * $query->filterByIdChorusEchange('%fooValue%'); // WHERE id_chorus_echange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idChorusEchange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByIdChorusEchange($idChorusEchange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idChorusEchange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idChorusEchange)) {
                $idChorusEchange = str_replace('*', '%', $idChorusEchange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ID_CHORUS_ECHANGE, $idChorusEchange, $comparison);
    }

    /**
     * Filter the query on the rpa column
     *
     * Example usage:
     * <code>
     * $query->filterByRpa('fooValue');   // WHERE rpa = 'fooValue'
     * $query->filterByRpa('%fooValue%'); // WHERE rpa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rpa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByRpa($rpa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rpa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rpa)) {
                $rpa = str_replace('*', '%', $rpa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::RPA, $rpa, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the fiche_immobilisation column
     *
     * Example usage:
     * <code>
     * $query->filterByFicheImmobilisation('fooValue');   // WHERE fiche_immobilisation = 'fooValue'
     * $query->filterByFicheImmobilisation('%fooValue%'); // WHERE fiche_immobilisation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ficheImmobilisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByFicheImmobilisation($ficheImmobilisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ficheImmobilisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ficheImmobilisation)) {
                $ficheImmobilisation = str_replace('*', '%', $ficheImmobilisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::FICHE_IMMOBILISATION, $ficheImmobilisation, $comparison);
    }

    /**
     * Filter the query on the attente_pj column
     *
     * Example usage:
     * <code>
     * $query->filterByAttentePj('fooValue');   // WHERE attente_pj = 'fooValue'
     * $query->filterByAttentePj('%fooValue%'); // WHERE attente_pj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attentePj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByAttentePj($attentePj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attentePj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attentePj)) {
                $attentePj = str_replace('*', '%', $attentePj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ATTENTE_PJ, $attentePj, $comparison);
    }

    /**
     * Filter the query on the marche_partage column
     *
     * Example usage:
     * <code>
     * $query->filterByMarchePartage('fooValue');   // WHERE marche_partage = 'fooValue'
     * $query->filterByMarchePartage('%fooValue%'); // WHERE marche_partage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marchePartage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMarchePartage($marchePartage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marchePartage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marchePartage)) {
                $marchePartage = str_replace('*', '%', $marchePartage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MARCHE_PARTAGE, $marchePartage, $comparison);
    }

    /**
     * Filter the query on the id_accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAccordCadre('fooValue');   // WHERE id_accord_cadre = 'fooValue'
     * $query->filterByIdAccordCadre('%fooValue%'); // WHERE id_accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idAccordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByIdAccordCadre($idAccordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idAccordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idAccordCadre)) {
                $idAccordCadre = str_replace('*', '%', $idAccordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ID_ACCORD_CADRE, $idAccordCadre, $comparison);
    }

    /**
     * Filter the query on the lib_accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByLibAccordCadre('fooValue');   // WHERE lib_accord_cadre = 'fooValue'
     * $query->filterByLibAccordCadre('%fooValue%'); // WHERE lib_accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libAccordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByLibAccordCadre($libAccordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libAccordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libAccordCadre)) {
                $libAccordCadre = str_replace('*', '%', $libAccordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::LIB_ACCORD_CADRE, $libAccordCadre, $comparison);
    }

    /**
     * Filter the query on the annee_creation_accord_cadre column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeCreationAccordCadre('fooValue');   // WHERE annee_creation_accord_cadre = 'fooValue'
     * $query->filterByAnneeCreationAccordCadre('%fooValue%'); // WHERE annee_creation_accord_cadre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeCreationAccordCadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByAnneeCreationAccordCadre($anneeCreationAccordCadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeCreationAccordCadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeCreationAccordCadre)) {
                $anneeCreationAccordCadre = str_replace('*', '%', $anneeCreationAccordCadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ANNEE_CREATION_ACCORD_CADRE, $anneeCreationAccordCadre, $comparison);
    }

    /**
     * Filter the query on the montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantHt('fooValue');   // WHERE montant_ht = 'fooValue'
     * $query->filterByMontantHt('%fooValue%'); // WHERE montant_ht LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantHt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMontantHt($montantHt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantHt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantHt)) {
                $montantHt = str_replace('*', '%', $montantHt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MONTANT_HT, $montantHt, $comparison);
    }

    /**
     * Filter the query on the reconductible column
     *
     * Example usage:
     * <code>
     * $query->filterByReconductible('fooValue');   // WHERE reconductible = 'fooValue'
     * $query->filterByReconductible('%fooValue%'); // WHERE reconductible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reconductible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reconductible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reconductible)) {
                $reconductible = str_replace('*', '%', $reconductible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::RECONDUCTIBLE, $reconductible, $comparison);
    }

    /**
     * Filter the query on the visa_accf column
     *
     * Example usage:
     * <code>
     * $query->filterByVisaAccf('fooValue');   // WHERE visa_accf = 'fooValue'
     * $query->filterByVisaAccf('%fooValue%'); // WHERE visa_accf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visaAccf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByVisaAccf($visaAccf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visaAccf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visaAccf)) {
                $visaAccf = str_replace('*', '%', $visaAccf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::VISA_ACCF, $visaAccf, $comparison);
    }

    /**
     * Filter the query on the visa_prefet column
     *
     * Example usage:
     * <code>
     * $query->filterByVisaPrefet('fooValue');   // WHERE visa_prefet = 'fooValue'
     * $query->filterByVisaPrefet('%fooValue%'); // WHERE visa_prefet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visaPrefet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByVisaPrefet($visaPrefet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visaPrefet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visaPrefet)) {
                $visaPrefet = str_replace('*', '%', $visaPrefet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::VISA_PREFET, $visaPrefet, $comparison);
    }

    /**
     * Filter the query on the retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByRetenueGarantie('fooValue');   // WHERE retenue_garantie = 'fooValue'
     * $query->filterByRetenueGarantie('%fooValue%'); // WHERE retenue_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retenueGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByRetenueGarantie($retenueGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retenueGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retenueGarantie)) {
                $retenueGarantie = str_replace('*', '%', $retenueGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::RETENUE_GARANTIE, $retenueGarantie, $comparison);
    }

    /**
     * Filter the query on the montant_mini column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMini('fooValue');   // WHERE montant_mini = 'fooValue'
     * $query->filterByMontantMini('%fooValue%'); // WHERE montant_mini LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantMini The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMontantMini($montantMini = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantMini)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantMini)) {
                $montantMini = str_replace('*', '%', $montantMini);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MONTANT_MINI, $montantMini, $comparison);
    }

    /**
     * Filter the query on the montant_maxi column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMaxi('fooValue');   // WHERE montant_maxi = 'fooValue'
     * $query->filterByMontantMaxi('%fooValue%'); // WHERE montant_maxi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantMaxi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMontantMaxi($montantMaxi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantMaxi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantMaxi)) {
                $montantMaxi = str_replace('*', '%', $montantMaxi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MONTANT_MAXI, $montantMaxi, $comparison);
    }

    /**
     * Filter the query on the montant_forfaitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantForfaitaire('fooValue');   // WHERE montant_forfaitaire = 'fooValue'
     * $query->filterByMontantForfaitaire('%fooValue%'); // WHERE montant_forfaitaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantForfaitaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMontantForfaitaire($montantForfaitaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantForfaitaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantForfaitaire)) {
                $montantForfaitaire = str_replace('*', '%', $montantForfaitaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MONTANT_FORFAITAIRE, $montantForfaitaire, $comparison);
    }

    /**
     * Filter the query on the montant_bc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantBc('fooValue');   // WHERE montant_bc = 'fooValue'
     * $query->filterByMontantBc('%fooValue%'); // WHERE montant_bc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantBc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByMontantBc($montantBc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantBc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantBc)) {
                $montantBc = str_replace('*', '%', $montantBc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::MONTANT_BC, $montantBc, $comparison);
    }

    /**
     * Filter the query on the taux_tva column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxTva('fooValue');   // WHERE taux_tva = 'fooValue'
     * $query->filterByTauxTva('%fooValue%'); // WHERE taux_tva LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tauxTva The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByTauxTva($tauxTva = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tauxTva)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tauxTva)) {
                $tauxTva = str_replace('*', '%', $tauxTva);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::TAUX_TVA, $tauxTva, $comparison);
    }

    /**
     * Filter the query on the centre_cout column
     *
     * Example usage:
     * <code>
     * $query->filterByCentreCout('fooValue');   // WHERE centre_cout = 'fooValue'
     * $query->filterByCentreCout('%fooValue%'); // WHERE centre_cout LIKE '%fooValue%'
     * </code>
     *
     * @param     string $centreCout The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByCentreCout($centreCout = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($centreCout)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $centreCout)) {
                $centreCout = str_replace('*', '%', $centreCout);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::CENTRE_COUT, $centreCout, $comparison);
    }

    /**
     * Filter the query on the centre_financier column
     *
     * Example usage:
     * <code>
     * $query->filterByCentreFinancier('fooValue');   // WHERE centre_financier = 'fooValue'
     * $query->filterByCentreFinancier('%fooValue%'); // WHERE centre_financier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $centreFinancier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByCentreFinancier($centreFinancier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($centreFinancier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $centreFinancier)) {
                $centreFinancier = str_replace('*', '%', $centreFinancier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::CENTRE_FINANCIER, $centreFinancier, $comparison);
    }

    /**
     * Filter the query on the activite column
     *
     * Example usage:
     * <code>
     * $query->filterByActivite('fooValue');   // WHERE activite = 'fooValue'
     * $query->filterByActivite('%fooValue%'); // WHERE activite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByActivite($activite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activite)) {
                $activite = str_replace('*', '%', $activite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ACTIVITE, $activite, $comparison);
    }

    /**
     * Filter the query on the domaine_fonctionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByDomaineFonctionnel('fooValue');   // WHERE domaine_fonctionnel = 'fooValue'
     * $query->filterByDomaineFonctionnel('%fooValue%'); // WHERE domaine_fonctionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $domaineFonctionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByDomaineFonctionnel($domaineFonctionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($domaineFonctionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $domaineFonctionnel)) {
                $domaineFonctionnel = str_replace('*', '%', $domaineFonctionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::DOMAINE_FONCTIONNEL, $domaineFonctionnel, $comparison);
    }

    /**
     * Filter the query on the fond column
     *
     * Example usage:
     * <code>
     * $query->filterByFond('fooValue');   // WHERE fond = 'fooValue'
     * $query->filterByFond('%fooValue%'); // WHERE fond LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fond The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByFond($fond = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fond)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fond)) {
                $fond = str_replace('*', '%', $fond);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::FOND, $fond, $comparison);
    }

    /**
     * Filter the query on the localisation_interministerielle column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalisationInterministerielle('fooValue');   // WHERE localisation_interministerielle = 'fooValue'
     * $query->filterByLocalisationInterministerielle('%fooValue%'); // WHERE localisation_interministerielle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localisationInterministerielle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByLocalisationInterministerielle($localisationInterministerielle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localisationInterministerielle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localisationInterministerielle)) {
                $localisationInterministerielle = str_replace('*', '%', $localisationInterministerielle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::LOCALISATION_INTERMINISTERIELLE, $localisationInterministerielle, $comparison);
    }

    /**
     * Filter the query on the nature column
     *
     * Example usage:
     * <code>
     * $query->filterByNature('fooValue');   // WHERE nature = 'fooValue'
     * $query->filterByNature('%fooValue%'); // WHERE nature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByNature($nature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nature)) {
                $nature = str_replace('*', '%', $nature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::NATURE, $nature, $comparison);
    }

    /**
     * Filter the query on the axe_ministeriel1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAxeMinisteriel1('fooValue');   // WHERE axe_ministeriel1 = 'fooValue'
     * $query->filterByAxeMinisteriel1('%fooValue%'); // WHERE axe_ministeriel1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $axeMinisteriel1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByAxeMinisteriel1($axeMinisteriel1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($axeMinisteriel1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $axeMinisteriel1)) {
                $axeMinisteriel1 = str_replace('*', '%', $axeMinisteriel1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::AXE_MINISTERIEL1, $axeMinisteriel1, $comparison);
    }

    /**
     * Filter the query on the projet_analytique column
     *
     * Example usage:
     * <code>
     * $query->filterByProjetAnalytique('fooValue');   // WHERE projet_analytique = 'fooValue'
     * $query->filterByProjetAnalytique('%fooValue%'); // WHERE projet_analytique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $projetAnalytique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByProjetAnalytique($projetAnalytique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($projetAnalytique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $projetAnalytique)) {
                $projetAnalytique = str_replace('*', '%', $projetAnalytique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::PROJET_ANALYTIQUE, $projetAnalytique, $comparison);
    }

    /**
     * Filter the query on the localisation_ministerielle column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalisationMinisterielle('fooValue');   // WHERE localisation_ministerielle = 'fooValue'
     * $query->filterByLocalisationMinisterielle('%fooValue%'); // WHERE localisation_ministerielle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localisationMinisterielle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByLocalisationMinisterielle($localisationMinisterielle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localisationMinisterielle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localisationMinisterielle)) {
                $localisationMinisterielle = str_replace('*', '%', $localisationMinisterielle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::LOCALISATION_MINISTERIELLE, $localisationMinisterielle, $comparison);
    }

    /**
     * Filter the query on the axe_ministeriel2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAxeMinisteriel2('fooValue');   // WHERE axe_ministeriel2 = 'fooValue'
     * $query->filterByAxeMinisteriel2('%fooValue%'); // WHERE axe_ministeriel2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $axeMinisteriel2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByAxeMinisteriel2($axeMinisteriel2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($axeMinisteriel2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $axeMinisteriel2)) {
                $axeMinisteriel2 = str_replace('*', '%', $axeMinisteriel2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::AXE_MINISTERIEL2, $axeMinisteriel2, $comparison);
    }

    /**
     * Filter the query on the remarques column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarques('fooValue');   // WHERE remarques = 'fooValue'
     * $query->filterByRemarques('%fooValue%'); // WHERE remarques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByRemarques($remarques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarques)) {
                $remarques = str_replace('*', '%', $remarques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::REMARQUES, $remarques, $comparison);
    }

    /**
     * Filter the query on the id_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocument(1234); // WHERE id_document = 1234
     * $query->filterByIdDocument(array(12, 34)); // WHERE id_document IN (12, 34)
     * $query->filterByIdDocument(array('min' => 12)); // WHERE id_document >= 12
     * $query->filterByIdDocument(array('max' => 12)); // WHERE id_document <= 12
     * </code>
     *
     * @param     mixed $idDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonChorusFicheNavettePeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonChorusFicheNavettePeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the nom_document column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocument('fooValue');   // WHERE nom_document = 'fooValue'
     * $query->filterByNomDocument('%fooValue%'); // WHERE nom_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function filterByNomDocument($nomDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocument)) {
                $nomDocument = str_replace('*', '%', $nomDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusFicheNavettePeer::NOM_DOCUMENT, $nomDocument, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusFicheNavette $commonChorusFicheNavette Object to remove from the list of results
     *
     * @return CommonChorusFicheNavetteQuery The current query, for fluid interface
     */
    public function prune($commonChorusFicheNavette = null)
    {
        if ($commonChorusFicheNavette) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChorusFicheNavettePeer::ID), $commonChorusFicheNavette->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChorusFicheNavettePeer::ORGANISME), $commonChorusFicheNavette->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
