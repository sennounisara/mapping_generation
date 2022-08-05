<?php


/**
 * Base class that represents a query for the 'Justificatifs' table.
 *
 * 
 *
 * @method CommonJustificatifsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonJustificatifsQuery orderByIntituleJustificatif($order = Criteria::ASC) Order by the intitule_justificatif column
 * @method CommonJustificatifsQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonJustificatifsQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonJustificatifsQuery orderByJustificatif($order = Criteria::ASC) Order by the justificatif column
 * @method CommonJustificatifsQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonJustificatifsQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonJustificatifsQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonJustificatifsQuery orderByNomFr($order = Criteria::ASC) Order by the nom_fr column
 * @method CommonJustificatifsQuery orderByNomEn($order = Criteria::ASC) Order by the nom_en column
 * @method CommonJustificatifsQuery orderByNomEs($order = Criteria::ASC) Order by the nom_es column
 * @method CommonJustificatifsQuery orderByNomSu($order = Criteria::ASC) Order by the nom_su column
 * @method CommonJustificatifsQuery orderByNomDu($order = Criteria::ASC) Order by the nom_du column
 * @method CommonJustificatifsQuery orderByNomCz($order = Criteria::ASC) Order by the nom_cz column
 * @method CommonJustificatifsQuery orderByNomAr($order = Criteria::ASC) Order by the nom_ar column
 * @method CommonJustificatifsQuery orderByNomIt($order = Criteria::ASC) Order by the nom_it column
 * @method CommonJustificatifsQuery orderByDateFinValidite($order = Criteria::ASC) Order by the date_fin_validite column
 * @method CommonJustificatifsQuery orderByVisibleParAgents($order = Criteria::ASC) Order by the visible_par_agents column
 *
 * @method CommonJustificatifsQuery groupById() Group by the id column
 * @method CommonJustificatifsQuery groupByIntituleJustificatif() Group by the intitule_justificatif column
 * @method CommonJustificatifsQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonJustificatifsQuery groupByTaille() Group by the taille column
 * @method CommonJustificatifsQuery groupByJustificatif() Group by the justificatif column
 * @method CommonJustificatifsQuery groupByStatut() Group by the statut column
 * @method CommonJustificatifsQuery groupByIdDocument() Group by the id_document column
 * @method CommonJustificatifsQuery groupByNom() Group by the nom column
 * @method CommonJustificatifsQuery groupByNomFr() Group by the nom_fr column
 * @method CommonJustificatifsQuery groupByNomEn() Group by the nom_en column
 * @method CommonJustificatifsQuery groupByNomEs() Group by the nom_es column
 * @method CommonJustificatifsQuery groupByNomSu() Group by the nom_su column
 * @method CommonJustificatifsQuery groupByNomDu() Group by the nom_du column
 * @method CommonJustificatifsQuery groupByNomCz() Group by the nom_cz column
 * @method CommonJustificatifsQuery groupByNomAr() Group by the nom_ar column
 * @method CommonJustificatifsQuery groupByNomIt() Group by the nom_it column
 * @method CommonJustificatifsQuery groupByDateFinValidite() Group by the date_fin_validite column
 * @method CommonJustificatifsQuery groupByVisibleParAgents() Group by the visible_par_agents column
 *
 * @method CommonJustificatifsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonJustificatifsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonJustificatifsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonJustificatifs findOne(PropelPDO $con = null) Return the first CommonJustificatifs matching the query
 * @method CommonJustificatifs findOneOrCreate(PropelPDO $con = null) Return the first CommonJustificatifs matching the query, or a new CommonJustificatifs object populated from the query conditions when no match is found
 *
 * @method CommonJustificatifs findOneByIntituleJustificatif(string $intitule_justificatif) Return the first CommonJustificatifs filtered by the intitule_justificatif column
 * @method CommonJustificatifs findOneByIdEntreprise(int $id_entreprise) Return the first CommonJustificatifs filtered by the id_entreprise column
 * @method CommonJustificatifs findOneByTaille(string $taille) Return the first CommonJustificatifs filtered by the taille column
 * @method CommonJustificatifs findOneByJustificatif(int $justificatif) Return the first CommonJustificatifs filtered by the justificatif column
 * @method CommonJustificatifs findOneByStatut(string $statut) Return the first CommonJustificatifs filtered by the statut column
 * @method CommonJustificatifs findOneByIdDocument(int $id_document) Return the first CommonJustificatifs filtered by the id_document column
 * @method CommonJustificatifs findOneByNom(string $nom) Return the first CommonJustificatifs filtered by the nom column
 * @method CommonJustificatifs findOneByNomFr(string $nom_fr) Return the first CommonJustificatifs filtered by the nom_fr column
 * @method CommonJustificatifs findOneByNomEn(string $nom_en) Return the first CommonJustificatifs filtered by the nom_en column
 * @method CommonJustificatifs findOneByNomEs(string $nom_es) Return the first CommonJustificatifs filtered by the nom_es column
 * @method CommonJustificatifs findOneByNomSu(string $nom_su) Return the first CommonJustificatifs filtered by the nom_su column
 * @method CommonJustificatifs findOneByNomDu(string $nom_du) Return the first CommonJustificatifs filtered by the nom_du column
 * @method CommonJustificatifs findOneByNomCz(string $nom_cz) Return the first CommonJustificatifs filtered by the nom_cz column
 * @method CommonJustificatifs findOneByNomAr(string $nom_ar) Return the first CommonJustificatifs filtered by the nom_ar column
 * @method CommonJustificatifs findOneByNomIt(string $nom_it) Return the first CommonJustificatifs filtered by the nom_it column
 * @method CommonJustificatifs findOneByDateFinValidite(string $date_fin_validite) Return the first CommonJustificatifs filtered by the date_fin_validite column
 * @method CommonJustificatifs findOneByVisibleParAgents(string $visible_par_agents) Return the first CommonJustificatifs filtered by the visible_par_agents column
 *
 * @method array findById(int $id) Return CommonJustificatifs objects filtered by the id column
 * @method array findByIntituleJustificatif(string $intitule_justificatif) Return CommonJustificatifs objects filtered by the intitule_justificatif column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonJustificatifs objects filtered by the id_entreprise column
 * @method array findByTaille(string $taille) Return CommonJustificatifs objects filtered by the taille column
 * @method array findByJustificatif(int $justificatif) Return CommonJustificatifs objects filtered by the justificatif column
 * @method array findByStatut(string $statut) Return CommonJustificatifs objects filtered by the statut column
 * @method array findByIdDocument(int $id_document) Return CommonJustificatifs objects filtered by the id_document column
 * @method array findByNom(string $nom) Return CommonJustificatifs objects filtered by the nom column
 * @method array findByNomFr(string $nom_fr) Return CommonJustificatifs objects filtered by the nom_fr column
 * @method array findByNomEn(string $nom_en) Return CommonJustificatifs objects filtered by the nom_en column
 * @method array findByNomEs(string $nom_es) Return CommonJustificatifs objects filtered by the nom_es column
 * @method array findByNomSu(string $nom_su) Return CommonJustificatifs objects filtered by the nom_su column
 * @method array findByNomDu(string $nom_du) Return CommonJustificatifs objects filtered by the nom_du column
 * @method array findByNomCz(string $nom_cz) Return CommonJustificatifs objects filtered by the nom_cz column
 * @method array findByNomAr(string $nom_ar) Return CommonJustificatifs objects filtered by the nom_ar column
 * @method array findByNomIt(string $nom_it) Return CommonJustificatifs objects filtered by the nom_it column
 * @method array findByDateFinValidite(string $date_fin_validite) Return CommonJustificatifs objects filtered by the date_fin_validite column
 * @method array findByVisibleParAgents(string $visible_par_agents) Return CommonJustificatifs objects filtered by the visible_par_agents column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonJustificatifsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonJustificatifsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonJustificatifs', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonJustificatifsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonJustificatifsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonJustificatifsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonJustificatifsQuery) {
            return $criteria;
        }
        $query = new CommonJustificatifsQuery();
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
     * @return   CommonJustificatifs|CommonJustificatifs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonJustificatifsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonJustificatifs A model object, or null if the key is not found
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
     * @return                 CommonJustificatifs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `intitule_justificatif`, `id_entreprise`, `taille`, `justificatif`, `statut`, `id_document`, `nom`, `nom_fr`, `nom_en`, `nom_es`, `nom_su`, `nom_du`, `nom_cz`, `nom_ar`, `nom_it`, `date_fin_validite`, `visible_par_agents` FROM `Justificatifs` WHERE `id` = :p0';
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
            $obj = new CommonJustificatifs();
            $obj->hydrate($row);
            CommonJustificatifsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonJustificatifs|CommonJustificatifs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonJustificatifs[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonJustificatifsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonJustificatifsPeer::ID, $keys, Criteria::IN);
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
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the intitule_justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleJustificatif('fooValue');   // WHERE intitule_justificatif = 'fooValue'
     * $query->filterByIntituleJustificatif('%fooValue%'); // WHERE intitule_justificatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleJustificatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByIntituleJustificatif($intituleJustificatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleJustificatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleJustificatif)) {
                $intituleJustificatif = str_replace('*', '%', $intituleJustificatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::INTITULE_JUSTIFICATIF, $intituleJustificatif, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByJustificatif(1234); // WHERE justificatif = 1234
     * $query->filterByJustificatif(array(12, 34)); // WHERE justificatif IN (12, 34)
     * $query->filterByJustificatif(array('min' => 12)); // WHERE justificatif >= 12
     * $query->filterByJustificatif(array('max' => 12)); // WHERE justificatif <= 12
     * </code>
     *
     * @param     mixed $justificatif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByJustificatif($justificatif = null, $comparison = null)
    {
        if (is_array($justificatif)) {
            $useMinMax = false;
            if (isset($justificatif['min'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::JUSTIFICATIF, $justificatif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($justificatif['max'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::JUSTIFICATIF, $justificatif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::JUSTIFICATIF, $justificatif, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::STATUT, $statut, $comparison);
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
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the nom_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFr('fooValue');   // WHERE nom_fr = 'fooValue'
     * $query->filterByNomFr('%fooValue%'); // WHERE nom_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomFr($nomFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFr)) {
                $nomFr = str_replace('*', '%', $nomFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_FR, $nomFr, $comparison);
    }

    /**
     * Filter the query on the nom_en column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEn('fooValue');   // WHERE nom_en = 'fooValue'
     * $query->filterByNomEn('%fooValue%'); // WHERE nom_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomEn($nomEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEn)) {
                $nomEn = str_replace('*', '%', $nomEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_EN, $nomEn, $comparison);
    }

    /**
     * Filter the query on the nom_es column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEs('fooValue');   // WHERE nom_es = 'fooValue'
     * $query->filterByNomEs('%fooValue%'); // WHERE nom_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomEs($nomEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEs)) {
                $nomEs = str_replace('*', '%', $nomEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_ES, $nomEs, $comparison);
    }

    /**
     * Filter the query on the nom_su column
     *
     * Example usage:
     * <code>
     * $query->filterByNomSu('fooValue');   // WHERE nom_su = 'fooValue'
     * $query->filterByNomSu('%fooValue%'); // WHERE nom_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomSu($nomSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomSu)) {
                $nomSu = str_replace('*', '%', $nomSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_SU, $nomSu, $comparison);
    }

    /**
     * Filter the query on the nom_du column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDu('fooValue');   // WHERE nom_du = 'fooValue'
     * $query->filterByNomDu('%fooValue%'); // WHERE nom_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomDu($nomDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDu)) {
                $nomDu = str_replace('*', '%', $nomDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_DU, $nomDu, $comparison);
    }

    /**
     * Filter the query on the nom_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCz('fooValue');   // WHERE nom_cz = 'fooValue'
     * $query->filterByNomCz('%fooValue%'); // WHERE nom_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomCz($nomCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCz)) {
                $nomCz = str_replace('*', '%', $nomCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_CZ, $nomCz, $comparison);
    }

    /**
     * Filter the query on the nom_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAr('fooValue');   // WHERE nom_ar = 'fooValue'
     * $query->filterByNomAr('%fooValue%'); // WHERE nom_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomAr($nomAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAr)) {
                $nomAr = str_replace('*', '%', $nomAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_AR, $nomAr, $comparison);
    }

    /**
     * Filter the query on the nom_it column
     *
     * Example usage:
     * <code>
     * $query->filterByNomIt('fooValue');   // WHERE nom_it = 'fooValue'
     * $query->filterByNomIt('%fooValue%'); // WHERE nom_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByNomIt($nomIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomIt)) {
                $nomIt = str_replace('*', '%', $nomIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::NOM_IT, $nomIt, $comparison);
    }

    /**
     * Filter the query on the date_fin_validite column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinValidite('2011-03-14'); // WHERE date_fin_validite = '2011-03-14'
     * $query->filterByDateFinValidite('now'); // WHERE date_fin_validite = '2011-03-14'
     * $query->filterByDateFinValidite(array('max' => 'yesterday')); // WHERE date_fin_validite > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFinValidite The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByDateFinValidite($dateFinValidite = null, $comparison = null)
    {
        if (is_array($dateFinValidite)) {
            $useMinMax = false;
            if (isset($dateFinValidite['min'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::DATE_FIN_VALIDITE, $dateFinValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinValidite['max'])) {
                $this->addUsingAlias(CommonJustificatifsPeer::DATE_FIN_VALIDITE, $dateFinValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::DATE_FIN_VALIDITE, $dateFinValidite, $comparison);
    }

    /**
     * Filter the query on the visible_par_agents column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleParAgents('fooValue');   // WHERE visible_par_agents = 'fooValue'
     * $query->filterByVisibleParAgents('%fooValue%'); // WHERE visible_par_agents LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleParAgents The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function filterByVisibleParAgents($visibleParAgents = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleParAgents)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleParAgents)) {
                $visibleParAgents = str_replace('*', '%', $visibleParAgents);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJustificatifsPeer::VISIBLE_PAR_AGENTS, $visibleParAgents, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonJustificatifs $commonJustificatifs Object to remove from the list of results
     *
     * @return CommonJustificatifsQuery The current query, for fluid interface
     */
    public function prune($commonJustificatifs = null)
    {
        if ($commonJustificatifs) {
            $this->addUsingAlias(CommonJustificatifsPeer::ID, $commonJustificatifs->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
