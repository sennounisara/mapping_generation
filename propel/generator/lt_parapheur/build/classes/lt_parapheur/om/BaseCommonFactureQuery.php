<?php


/**
 * Base class that represents a query for the 'facture' table.
 *
 * 
 *
 * @method CommonFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFactureQuery orderByIdType($order = Criteria::ASC) Order by the id_type column
 * @method CommonFactureQuery orderByIdSousType($order = Criteria::ASC) Order by the id_sous_type column
 * @method CommonFactureQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonFactureQuery orderByRef($order = Criteria::ASC) Order by the ref column
 * @method CommonFactureQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonFactureQuery orderByMontantHt($order = Criteria::ASC) Order by the montant_ht column
 * @method CommonFactureQuery orderByMontantTtc($order = Criteria::ASC) Order by the montant_ttc column
 * @method CommonFactureQuery orderByMontantTva($order = Criteria::ASC) Order by the montant_tva column
 * @method CommonFactureQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonFactureQuery orderByDevis($order = Criteria::ASC) Order by the devis column
 * @method CommonFactureQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonFactureQuery orderByNumeroDepot($order = Criteria::ASC) Order by the numero_depot column
 * @method CommonFactureQuery orderByNumeroMarche($order = Criteria::ASC) Order by the numero_marche column
 * @method CommonFactureQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonFactureQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonFactureQuery orderByIdBlobFacture($order = Criteria::ASC) Order by the id_blob_facture column
 * @method CommonFactureQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonFactureQuery orderByIdBlobFactureSigne($order = Criteria::ASC) Order by the id_blob_facture_signe column
 * @method CommonFactureQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonFactureQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 *
 * @method CommonFactureQuery groupById() Group by the id column
 * @method CommonFactureQuery groupByIdType() Group by the id_type column
 * @method CommonFactureQuery groupByIdSousType() Group by the id_sous_type column
 * @method CommonFactureQuery groupByType() Group by the type column
 * @method CommonFactureQuery groupByRef() Group by the ref column
 * @method CommonFactureQuery groupByDateCreation() Group by the date_creation column
 * @method CommonFactureQuery groupByMontantHt() Group by the montant_ht column
 * @method CommonFactureQuery groupByMontantTtc() Group by the montant_ttc column
 * @method CommonFactureQuery groupByMontantTva() Group by the montant_tva column
 * @method CommonFactureQuery groupByObjet() Group by the objet column
 * @method CommonFactureQuery groupByDevis() Group by the devis column
 * @method CommonFactureQuery groupByStatut() Group by the statut column
 * @method CommonFactureQuery groupByNumeroDepot() Group by the numero_depot column
 * @method CommonFactureQuery groupByNumeroMarche() Group by the numero_marche column
 * @method CommonFactureQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonFactureQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonFactureQuery groupByIdBlobFacture() Group by the id_blob_facture column
 * @method CommonFactureQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonFactureQuery groupByIdBlobFactureSigne() Group by the id_blob_facture_signe column
 * @method CommonFactureQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonFactureQuery groupByDateDepot() Group by the date_depot column
 *
 * @method CommonFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFactureQuery leftJoinCommonTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTypeFacture relation
 * @method CommonFactureQuery rightJoinCommonTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTypeFacture relation
 * @method CommonFactureQuery innerJoinCommonTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTypeFacture relation
 *
 * @method CommonFactureQuery leftJoinCommonSousTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonFactureQuery rightJoinCommonSousTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonFactureQuery innerJoinCommonSousTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonSousTypeFacture relation
 *
 * @method CommonFacture findOne(PropelPDO $con = null) Return the first CommonFacture matching the query
 * @method CommonFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonFacture matching the query, or a new CommonFacture object populated from the query conditions when no match is found
 *
 * @method CommonFacture findOneByIdType(int $id_type) Return the first CommonFacture filtered by the id_type column
 * @method CommonFacture findOneByIdSousType(int $id_sous_type) Return the first CommonFacture filtered by the id_sous_type column
 * @method CommonFacture findOneByType(string $type) Return the first CommonFacture filtered by the type column
 * @method CommonFacture findOneByRef(string $ref) Return the first CommonFacture filtered by the ref column
 * @method CommonFacture findOneByDateCreation(string $date_creation) Return the first CommonFacture filtered by the date_creation column
 * @method CommonFacture findOneByMontantHt(double $montant_ht) Return the first CommonFacture filtered by the montant_ht column
 * @method CommonFacture findOneByMontantTtc(double $montant_ttc) Return the first CommonFacture filtered by the montant_ttc column
 * @method CommonFacture findOneByMontantTva(double $montant_tva) Return the first CommonFacture filtered by the montant_tva column
 * @method CommonFacture findOneByObjet(string $objet) Return the first CommonFacture filtered by the objet column
 * @method CommonFacture findOneByDevis(string $devis) Return the first CommonFacture filtered by the devis column
 * @method CommonFacture findOneByStatut(int $statut) Return the first CommonFacture filtered by the statut column
 * @method CommonFacture findOneByNumeroDepot(string $numero_depot) Return the first CommonFacture filtered by the numero_depot column
 * @method CommonFacture findOneByNumeroMarche(string $numero_marche) Return the first CommonFacture filtered by the numero_marche column
 * @method CommonFacture findOneByIdInscrit(int $id_inscrit) Return the first CommonFacture filtered by the id_inscrit column
 * @method CommonFacture findOneByIdEntreprise(int $id_entreprise) Return the first CommonFacture filtered by the id_entreprise column
 * @method CommonFacture findOneByIdBlobFacture(int $id_blob_facture) Return the first CommonFacture filtered by the id_blob_facture column
 * @method CommonFacture findOneByNomFichier(string $nom_fichier) Return the first CommonFacture filtered by the nom_fichier column
 * @method CommonFacture findOneByIdBlobFactureSigne(int $id_blob_facture_signe) Return the first CommonFacture filtered by the id_blob_facture_signe column
 * @method CommonFacture findOneByDateEnvoi(string $date_envoi) Return the first CommonFacture filtered by the date_envoi column
 * @method CommonFacture findOneByDateDepot(string $date_depot) Return the first CommonFacture filtered by the date_depot column
 *
 * @method array findById(int $id) Return CommonFacture objects filtered by the id column
 * @method array findByIdType(int $id_type) Return CommonFacture objects filtered by the id_type column
 * @method array findByIdSousType(int $id_sous_type) Return CommonFacture objects filtered by the id_sous_type column
 * @method array findByType(string $type) Return CommonFacture objects filtered by the type column
 * @method array findByRef(string $ref) Return CommonFacture objects filtered by the ref column
 * @method array findByDateCreation(string $date_creation) Return CommonFacture objects filtered by the date_creation column
 * @method array findByMontantHt(double $montant_ht) Return CommonFacture objects filtered by the montant_ht column
 * @method array findByMontantTtc(double $montant_ttc) Return CommonFacture objects filtered by the montant_ttc column
 * @method array findByMontantTva(double $montant_tva) Return CommonFacture objects filtered by the montant_tva column
 * @method array findByObjet(string $objet) Return CommonFacture objects filtered by the objet column
 * @method array findByDevis(string $devis) Return CommonFacture objects filtered by the devis column
 * @method array findByStatut(int $statut) Return CommonFacture objects filtered by the statut column
 * @method array findByNumeroDepot(string $numero_depot) Return CommonFacture objects filtered by the numero_depot column
 * @method array findByNumeroMarche(string $numero_marche) Return CommonFacture objects filtered by the numero_marche column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonFacture objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonFacture objects filtered by the id_entreprise column
 * @method array findByIdBlobFacture(int $id_blob_facture) Return CommonFacture objects filtered by the id_blob_facture column
 * @method array findByNomFichier(string $nom_fichier) Return CommonFacture objects filtered by the nom_fichier column
 * @method array findByIdBlobFactureSigne(int $id_blob_facture_signe) Return CommonFacture objects filtered by the id_blob_facture_signe column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonFacture objects filtered by the date_envoi column
 * @method array findByDateDepot(string $date_depot) Return CommonFacture objects filtered by the date_depot column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFactureQuery) {
            return $criteria;
        }
        $query = new CommonFactureQuery();
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
     * @return   CommonFacture|CommonFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFacture A model object, or null if the key is not found
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
     * @return                 CommonFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_type`, `id_sous_type`, `type`, `ref`, `date_creation`, `montant_ht`, `montant_ttc`, `montant_tva`, `objet`, `devis`, `statut`, `numero_depot`, `numero_marche`, `id_inscrit`, `id_entreprise`, `id_blob_facture`, `nom_fichier`, `id_blob_facture_signe`, `date_envoi`, `date_depot` FROM `facture` WHERE `id` = :p0';
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
            $obj = new CommonFacture();
            $obj->hydrate($row);
            CommonFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonFacture|CommonFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdType(1234); // WHERE id_type = 1234
     * $query->filterByIdType(array(12, 34)); // WHERE id_type IN (12, 34)
     * $query->filterByIdType(array('min' => 12)); // WHERE id_type >= 12
     * $query->filterByIdType(array('max' => 12)); // WHERE id_type <= 12
     * </code>
     *
     * @see       filterByCommonTypeFacture()
     *
     * @param     mixed $idType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdType($idType = null, $comparison = null)
    {
        if (is_array($idType)) {
            $useMinMax = false;
            if (isset($idType['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_TYPE, $idType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idType['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_TYPE, $idType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_TYPE, $idType, $comparison);
    }

    /**
     * Filter the query on the id_sous_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSousType(1234); // WHERE id_sous_type = 1234
     * $query->filterByIdSousType(array(12, 34)); // WHERE id_sous_type IN (12, 34)
     * $query->filterByIdSousType(array('min' => 12)); // WHERE id_sous_type >= 12
     * $query->filterByIdSousType(array('max' => 12)); // WHERE id_sous_type <= 12
     * </code>
     *
     * @see       filterByCommonSousTypeFacture()
     *
     * @param     mixed $idSousType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdSousType($idSousType = null, $comparison = null)
    {
        if (is_array($idSousType)) {
            $useMinMax = false;
            if (isset($idSousType['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_SOUS_TYPE, $idSousType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSousType['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_SOUS_TYPE, $idSousType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_SOUS_TYPE, $idSousType, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the ref column
     *
     * Example usage:
     * <code>
     * $query->filterByRef('fooValue');   // WHERE ref = 'fooValue'
     * $query->filterByRef('%fooValue%'); // WHERE ref LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ref The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByRef($ref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ref)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ref)) {
                $ref = str_replace('*', '%', $ref);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::REF, $ref, $comparison);
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
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantHt(1234); // WHERE montant_ht = 1234
     * $query->filterByMontantHt(array(12, 34)); // WHERE montant_ht IN (12, 34)
     * $query->filterByMontantHt(array('min' => 12)); // WHERE montant_ht >= 12
     * $query->filterByMontantHt(array('max' => 12)); // WHERE montant_ht <= 12
     * </code>
     *
     * @param     mixed $montantHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByMontantHt($montantHt = null, $comparison = null)
    {
        if (is_array($montantHt)) {
            $useMinMax = false;
            if (isset($montantHt['min'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_HT, $montantHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantHt['max'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_HT, $montantHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::MONTANT_HT, $montantHt, $comparison);
    }

    /**
     * Filter the query on the montant_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantTtc(1234); // WHERE montant_ttc = 1234
     * $query->filterByMontantTtc(array(12, 34)); // WHERE montant_ttc IN (12, 34)
     * $query->filterByMontantTtc(array('min' => 12)); // WHERE montant_ttc >= 12
     * $query->filterByMontantTtc(array('max' => 12)); // WHERE montant_ttc <= 12
     * </code>
     *
     * @param     mixed $montantTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByMontantTtc($montantTtc = null, $comparison = null)
    {
        if (is_array($montantTtc)) {
            $useMinMax = false;
            if (isset($montantTtc['min'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_TTC, $montantTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantTtc['max'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_TTC, $montantTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::MONTANT_TTC, $montantTtc, $comparison);
    }

    /**
     * Filter the query on the montant_tva column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantTva(1234); // WHERE montant_tva = 1234
     * $query->filterByMontantTva(array(12, 34)); // WHERE montant_tva IN (12, 34)
     * $query->filterByMontantTva(array('min' => 12)); // WHERE montant_tva >= 12
     * $query->filterByMontantTva(array('max' => 12)); // WHERE montant_tva <= 12
     * </code>
     *
     * @param     mixed $montantTva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByMontantTva($montantTva = null, $comparison = null)
    {
        if (is_array($montantTva)) {
            $useMinMax = false;
            if (isset($montantTva['min'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_TVA, $montantTva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantTva['max'])) {
                $this->addUsingAlias(CommonFacturePeer::MONTANT_TVA, $montantTva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::MONTANT_TVA, $montantTva, $comparison);
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
     * @return CommonFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFacturePeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the devis column
     *
     * Example usage:
     * <code>
     * $query->filterByDevis('fooValue');   // WHERE devis = 'fooValue'
     * $query->filterByDevis('%fooValue%'); // WHERE devis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByDevis($devis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devis)) {
                $devis = str_replace('*', '%', $devis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::DEVIS, $devis, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonFacturePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonFacturePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the numero_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDepot('fooValue');   // WHERE numero_depot = 'fooValue'
     * $query->filterByNumeroDepot('%fooValue%'); // WHERE numero_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByNumeroDepot($numeroDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDepot)) {
                $numeroDepot = str_replace('*', '%', $numeroDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::NUMERO_DEPOT, $numeroDepot, $comparison);
    }

    /**
     * Filter the query on the numero_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroMarche('fooValue');   // WHERE numero_marche = 'fooValue'
     * $query->filterByNumeroMarche('%fooValue%'); // WHERE numero_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByNumeroMarche($numeroMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroMarche)) {
                $numeroMarche = str_replace('*', '%', $numeroMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::NUMERO_MARCHE, $numeroMarche, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_blob_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobFacture(1234); // WHERE id_blob_facture = 1234
     * $query->filterByIdBlobFacture(array(12, 34)); // WHERE id_blob_facture IN (12, 34)
     * $query->filterByIdBlobFacture(array('min' => 12)); // WHERE id_blob_facture >= 12
     * $query->filterByIdBlobFacture(array('max' => 12)); // WHERE id_blob_facture <= 12
     * </code>
     *
     * @param     mixed $idBlobFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdBlobFacture($idBlobFacture = null, $comparison = null)
    {
        if (is_array($idBlobFacture)) {
            $useMinMax = false;
            if (isset($idBlobFacture['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE, $idBlobFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobFacture['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE, $idBlobFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE, $idBlobFacture, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the id_blob_facture_signe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobFactureSigne(1234); // WHERE id_blob_facture_signe = 1234
     * $query->filterByIdBlobFactureSigne(array(12, 34)); // WHERE id_blob_facture_signe IN (12, 34)
     * $query->filterByIdBlobFactureSigne(array('min' => 12)); // WHERE id_blob_facture_signe >= 12
     * $query->filterByIdBlobFactureSigne(array('max' => 12)); // WHERE id_blob_facture_signe <= 12
     * </code>
     *
     * @param     mixed $idBlobFactureSigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByIdBlobFactureSigne($idBlobFactureSigne = null, $comparison = null)
    {
        if (is_array($idBlobFactureSigne)) {
            $useMinMax = false;
            if (isset($idBlobFactureSigne['min'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE, $idBlobFactureSigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobFactureSigne['max'])) {
                $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE, $idBlobFactureSigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE, $idBlobFactureSigne, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('2011-03-14'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi('now'); // WHERE date_envoi = '2011-03-14'
     * $query->filterByDateEnvoi(array('max' => 'yesterday')); // WHERE date_envoi > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonFacturePeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFacturePeer::DATE_DEPOT, $dateDepot, $comparison);
    }

    /**
     * Filter the query by a related CommonTypeFacture object
     *
     * @param   CommonTypeFacture|PropelObjectCollection $commonTypeFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTypeFacture($commonTypeFacture, $comparison = null)
    {
        if ($commonTypeFacture instanceof CommonTypeFacture) {
            return $this
                ->addUsingAlias(CommonFacturePeer::ID_TYPE, $commonTypeFacture->getId(), $comparison);
        } elseif ($commonTypeFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonFacturePeer::ID_TYPE, $commonTypeFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonTypeFacture() only accepts arguments of type CommonTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function joinCommonTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTypeFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonTypeFacture relation CommonTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTypeFacture', 'CommonTypeFactureQuery');
    }

    /**
     * Filter the query by a related CommonSousTypeFacture object
     *
     * @param   CommonSousTypeFacture|PropelObjectCollection $commonSousTypeFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonSousTypeFacture($commonSousTypeFacture, $comparison = null)
    {
        if ($commonSousTypeFacture instanceof CommonSousTypeFacture) {
            return $this
                ->addUsingAlias(CommonFacturePeer::ID_SOUS_TYPE, $commonSousTypeFacture->getId(), $comparison);
        } elseif ($commonSousTypeFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonFacturePeer::ID_SOUS_TYPE, $commonSousTypeFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonSousTypeFacture() only accepts arguments of type CommonSousTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonSousTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function joinCommonSousTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonSousTypeFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonSousTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonSousTypeFacture relation CommonSousTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonSousTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonSousTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonSousTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonSousTypeFacture', 'CommonSousTypeFactureQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFacture $commonFacture Object to remove from the list of results
     *
     * @return CommonFactureQuery The current query, for fluid interface
     */
    public function prune($commonFacture = null)
    {
        if ($commonFacture) {
            $this->addUsingAlias(CommonFacturePeer::ID, $commonFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
