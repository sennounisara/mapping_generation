<?php


/**
 * Base class that represents a query for the 'DA_Consultation' table.
 *
 * 
 *
 * @method CommonDAConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDAConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDAConsultationQuery orderByReferenceUtilisateur($order = Criteria::ASC) Order by the reference_utilisateur column
 * @method CommonDAConsultationQuery orderBySociete($order = Criteria::ASC) Order by the Societe column
 * @method CommonDAConsultationQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonDAConsultationQuery orderByTypeProcedure($order = Criteria::ASC) Order by the type_procedure column
 * @method CommonDAConsultationQuery orderByTypeMarche($order = Criteria::ASC) Order by the type_marche column
 * @method CommonDAConsultationQuery orderBySatutAo($order = Criteria::ASC) Order by the satut_AO column
 * @method CommonDAConsultationQuery orderByDatefin($order = Criteria::ASC) Order by the datefin column
 * @method CommonDAConsultationQuery orderByDatemiseenligne($order = Criteria::ASC) Order by the datemiseenligne column
 * @method CommonDAConsultationQuery orderByCautionProvisoire($order = Criteria::ASC) Order by the caution_provisoire column
 * @method CommonDAConsultationQuery orderByPrincipale($order = Criteria::ASC) Order by the Principale column
 * @method CommonDAConsultationQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonDAConsultationQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDAConsultationQuery orderByCreateAt($order = Criteria::ASC) Order by the CREATE_AT column
 *
 * @method CommonDAConsultationQuery groupById() Group by the id column
 * @method CommonDAConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonDAConsultationQuery groupByReferenceUtilisateur() Group by the reference_utilisateur column
 * @method CommonDAConsultationQuery groupBySociete() Group by the Societe column
 * @method CommonDAConsultationQuery groupByObjet() Group by the objet column
 * @method CommonDAConsultationQuery groupByTypeProcedure() Group by the type_procedure column
 * @method CommonDAConsultationQuery groupByTypeMarche() Group by the type_marche column
 * @method CommonDAConsultationQuery groupBySatutAo() Group by the satut_AO column
 * @method CommonDAConsultationQuery groupByDatefin() Group by the datefin column
 * @method CommonDAConsultationQuery groupByDatemiseenligne() Group by the datemiseenligne column
 * @method CommonDAConsultationQuery groupByCautionProvisoire() Group by the caution_provisoire column
 * @method CommonDAConsultationQuery groupByPrincipale() Group by the Principale column
 * @method CommonDAConsultationQuery groupByLot() Group by the lot column
 * @method CommonDAConsultationQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDAConsultationQuery groupByCreateAt() Group by the CREATE_AT column
 *
 * @method CommonDAConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDAConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDAConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDAConsultationQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDAConsultationQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDAConsultationQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonDAConsultationQuery leftJoinCommonLigneDA($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonLigneDA relation
 * @method CommonDAConsultationQuery rightJoinCommonLigneDA($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonLigneDA relation
 * @method CommonDAConsultationQuery innerJoinCommonLigneDA($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonLigneDA relation
 *
 * @method CommonDAConsultation findOne(PropelPDO $con = null) Return the first CommonDAConsultation matching the query
 * @method CommonDAConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonDAConsultation matching the query, or a new CommonDAConsultation object populated from the query conditions when no match is found
 *
 * @method CommonDAConsultation findOneByOrganisme(string $organisme) Return the first CommonDAConsultation filtered by the organisme column
 * @method CommonDAConsultation findOneByReferenceUtilisateur(string $reference_utilisateur) Return the first CommonDAConsultation filtered by the reference_utilisateur column
 * @method CommonDAConsultation findOneBySociete(string $Societe) Return the first CommonDAConsultation filtered by the Societe column
 * @method CommonDAConsultation findOneByObjet(string $objet) Return the first CommonDAConsultation filtered by the objet column
 * @method CommonDAConsultation findOneByTypeProcedure(string $type_procedure) Return the first CommonDAConsultation filtered by the type_procedure column
 * @method CommonDAConsultation findOneByTypeMarche(string $type_marche) Return the first CommonDAConsultation filtered by the type_marche column
 * @method CommonDAConsultation findOneBySatutAo(string $satut_AO) Return the first CommonDAConsultation filtered by the satut_AO column
 * @method CommonDAConsultation findOneByDatefin(string $datefin) Return the first CommonDAConsultation filtered by the datefin column
 * @method CommonDAConsultation findOneByDatemiseenligne(string $datemiseenligne) Return the first CommonDAConsultation filtered by the datemiseenligne column
 * @method CommonDAConsultation findOneByCautionProvisoire(string $caution_provisoire) Return the first CommonDAConsultation filtered by the caution_provisoire column
 * @method CommonDAConsultation findOneByPrincipale(string $Principale) Return the first CommonDAConsultation filtered by the Principale column
 * @method CommonDAConsultation findOneByLot(int $lot) Return the first CommonDAConsultation filtered by the lot column
 * @method CommonDAConsultation findOneByConsultationRef(int $consultation_ref) Return the first CommonDAConsultation filtered by the consultation_ref column
 * @method CommonDAConsultation findOneByCreateAt(string $CREATE_AT) Return the first CommonDAConsultation filtered by the CREATE_AT column
 *
 * @method array findById(int $id) Return CommonDAConsultation objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDAConsultation objects filtered by the organisme column
 * @method array findByReferenceUtilisateur(string $reference_utilisateur) Return CommonDAConsultation objects filtered by the reference_utilisateur column
 * @method array findBySociete(string $Societe) Return CommonDAConsultation objects filtered by the Societe column
 * @method array findByObjet(string $objet) Return CommonDAConsultation objects filtered by the objet column
 * @method array findByTypeProcedure(string $type_procedure) Return CommonDAConsultation objects filtered by the type_procedure column
 * @method array findByTypeMarche(string $type_marche) Return CommonDAConsultation objects filtered by the type_marche column
 * @method array findBySatutAo(string $satut_AO) Return CommonDAConsultation objects filtered by the satut_AO column
 * @method array findByDatefin(string $datefin) Return CommonDAConsultation objects filtered by the datefin column
 * @method array findByDatemiseenligne(string $datemiseenligne) Return CommonDAConsultation objects filtered by the datemiseenligne column
 * @method array findByCautionProvisoire(string $caution_provisoire) Return CommonDAConsultation objects filtered by the caution_provisoire column
 * @method array findByPrincipale(string $Principale) Return CommonDAConsultation objects filtered by the Principale column
 * @method array findByLot(int $lot) Return CommonDAConsultation objects filtered by the lot column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDAConsultation objects filtered by the consultation_ref column
 * @method array findByCreateAt(string $CREATE_AT) Return CommonDAConsultation objects filtered by the CREATE_AT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDAConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDAConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDAConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDAConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDAConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDAConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDAConsultationQuery) {
            return $criteria;
        }
        $query = new CommonDAConsultationQuery();
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
     * @return   CommonDAConsultation|CommonDAConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDAConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDAConsultation A model object, or null if the key is not found
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
     * @return                 CommonDAConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `reference_utilisateur`, `Societe`, `objet`, `type_procedure`, `type_marche`, `satut_AO`, `datefin`, `datemiseenligne`, `caution_provisoire`, `Principale`, `lot`, `consultation_ref`, `CREATE_AT` FROM `DA_Consultation` WHERE `id` = :p0';
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
            $obj = new CommonDAConsultation();
            $obj->hydrate($row);
            CommonDAConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDAConsultation|CommonDAConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDAConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDAConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDAConsultationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::ID, $id, $comparison);
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
     * @return CommonDAConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDAConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference_utilisateur column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceUtilisateur('fooValue');   // WHERE reference_utilisateur = 'fooValue'
     * $query->filterByReferenceUtilisateur('%fooValue%'); // WHERE reference_utilisateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceUtilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByReferenceUtilisateur($referenceUtilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceUtilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceUtilisateur)) {
                $referenceUtilisateur = str_replace('*', '%', $referenceUtilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::REFERENCE_UTILISATEUR, $referenceUtilisateur, $comparison);
    }

    /**
     * Filter the query on the Societe column
     *
     * Example usage:
     * <code>
     * $query->filterBySociete('fooValue');   // WHERE Societe = 'fooValue'
     * $query->filterBySociete('%fooValue%'); // WHERE Societe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $societe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterBySociete($societe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($societe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $societe)) {
                $societe = str_replace('*', '%', $societe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::SOCIETE, $societe, $comparison);
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
     * @return CommonDAConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDAConsultationPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedure('fooValue');   // WHERE type_procedure = 'fooValue'
     * $query->filterByTypeProcedure('%fooValue%'); // WHERE type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeProcedure($typeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedure)) {
                $typeProcedure = str_replace('*', '%', $typeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::TYPE_PROCEDURE, $typeProcedure, $comparison);
    }

    /**
     * Filter the query on the type_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeMarche('fooValue');   // WHERE type_marche = 'fooValue'
     * $query->filterByTypeMarche('%fooValue%'); // WHERE type_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeMarche($typeMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeMarche)) {
                $typeMarche = str_replace('*', '%', $typeMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::TYPE_MARCHE, $typeMarche, $comparison);
    }

    /**
     * Filter the query on the satut_AO column
     *
     * Example usage:
     * <code>
     * $query->filterBySatutAo('fooValue');   // WHERE satut_AO = 'fooValue'
     * $query->filterBySatutAo('%fooValue%'); // WHERE satut_AO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $satutAo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterBySatutAo($satutAo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($satutAo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $satutAo)) {
                $satutAo = str_replace('*', '%', $satutAo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::SATUT_AO, $satutAo, $comparison);
    }

    /**
     * Filter the query on the datefin column
     *
     * Example usage:
     * <code>
     * $query->filterByDatefin('2011-03-14'); // WHERE datefin = '2011-03-14'
     * $query->filterByDatefin('now'); // WHERE datefin = '2011-03-14'
     * $query->filterByDatefin(array('max' => 'yesterday')); // WHERE datefin > '2011-03-13'
     * </code>
     *
     * @param     mixed $datefin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByDatefin($datefin = null, $comparison = null)
    {
        if (is_array($datefin)) {
            $useMinMax = false;
            if (isset($datefin['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::DATEFIN, $datefin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datefin['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::DATEFIN, $datefin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::DATEFIN, $datefin, $comparison);
    }

    /**
     * Filter the query on the datemiseenligne column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemiseenligne('2011-03-14'); // WHERE datemiseenligne = '2011-03-14'
     * $query->filterByDatemiseenligne('now'); // WHERE datemiseenligne = '2011-03-14'
     * $query->filterByDatemiseenligne(array('max' => 'yesterday')); // WHERE datemiseenligne > '2011-03-13'
     * </code>
     *
     * @param     mixed $datemiseenligne The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByDatemiseenligne($datemiseenligne = null, $comparison = null)
    {
        if (is_array($datemiseenligne)) {
            $useMinMax = false;
            if (isset($datemiseenligne['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::DATEMISEENLIGNE, $datemiseenligne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemiseenligne['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::DATEMISEENLIGNE, $datemiseenligne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::DATEMISEENLIGNE, $datemiseenligne, $comparison);
    }

    /**
     * Filter the query on the caution_provisoire column
     *
     * Example usage:
     * <code>
     * $query->filterByCautionProvisoire('fooValue');   // WHERE caution_provisoire = 'fooValue'
     * $query->filterByCautionProvisoire('%fooValue%'); // WHERE caution_provisoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cautionProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByCautionProvisoire($cautionProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cautionProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cautionProvisoire)) {
                $cautionProvisoire = str_replace('*', '%', $cautionProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::CAUTION_PROVISOIRE, $cautionProvisoire, $comparison);
    }

    /**
     * Filter the query on the Principale column
     *
     * Example usage:
     * <code>
     * $query->filterByPrincipale('fooValue');   // WHERE Principale = 'fooValue'
     * $query->filterByPrincipale('%fooValue%'); // WHERE Principale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $principale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByPrincipale($principale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($principale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $principale)) {
                $principale = str_replace('*', '%', $principale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::PRINCIPALE, $principale, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the CREATE_AT column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateAt('2011-03-14'); // WHERE CREATE_AT = '2011-03-14'
     * $query->filterByCreateAt('now'); // WHERE CREATE_AT = '2011-03-14'
     * $query->filterByCreateAt(array('max' => 'yesterday')); // WHERE CREATE_AT > '2011-03-13'
     * </code>
     *
     * @param     mixed $createAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function filterByCreateAt($createAt = null, $comparison = null)
    {
        if (is_array($createAt)) {
            $useMinMax = false;
            if (isset($createAt['min'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::CREATE_AT, $createAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createAt['max'])) {
                $this->addUsingAlias(CommonDAConsultationPeer::CREATE_AT, $createAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDAConsultationPeer::CREATE_AT, $createAt, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDAConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonDAConsultationPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonDAConsultationPeer::CONSULTATION_REF, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Filter the query by a related CommonLigneDA object
     *
     * @param   CommonLigneDA|PropelObjectCollection $commonLigneDA  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDAConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonLigneDA($commonLigneDA, $comparison = null)
    {
        if ($commonLigneDA instanceof CommonLigneDA) {
            return $this
                ->addUsingAlias(CommonDAConsultationPeer::ID, $commonLigneDA->getDaConsultationRef(), $comparison);
        } elseif ($commonLigneDA instanceof PropelObjectCollection) {
            return $this
                ->useCommonLigneDAQuery()
                ->filterByPrimaryKeys($commonLigneDA->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonLigneDA() only accepts arguments of type CommonLigneDA or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonLigneDA relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function joinCommonLigneDA($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonLigneDA');

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
            $this->addJoinObject($join, 'CommonLigneDA');
        }

        return $this;
    }

    /**
     * Use the CommonLigneDA relation CommonLigneDA object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonLigneDAQuery A secondary query class using the current class as primary query
     */
    public function useCommonLigneDAQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonLigneDA($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonLigneDA', 'CommonLigneDAQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDAConsultation $commonDAConsultation Object to remove from the list of results
     *
     * @return CommonDAConsultationQuery The current query, for fluid interface
     */
    public function prune($commonDAConsultation = null)
    {
        if ($commonDAConsultation) {
            $this->addUsingAlias(CommonDAConsultationPeer::ID, $commonDAConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
