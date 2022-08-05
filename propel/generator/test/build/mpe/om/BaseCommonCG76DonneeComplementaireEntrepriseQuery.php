<?php


/**
 * Base class that represents a query for the 'CG76_Donnee_Complementaire_entreprise' table.
 *
 * 
 *
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByRef($order = Criteria::ASC) Order by the Ref column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByIdinscrit($order = Criteria::ASC) Order by the idInscrit column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByIdentreprise($order = Criteria::ASC) Order by the IdEntreprise column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByTypeFormation($order = Criteria::ASC) Order by the type_formation column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByCoutMoyenJournee($order = Criteria::ASC) Order by the cout_moyen_journee column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByCollaborationFpt($order = Criteria::ASC) Order by the collaboration_fpt column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByCollaborationFpe($order = Criteria::ASC) Order by the collaboration_fpe column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByCentreDocumentation($order = Criteria::ASC) Order by the centre_documentation column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByServiceReprographie($order = Criteria::ASC) Order by the service_reprographie column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderBySalleInfo($order = Criteria::ASC) Order by the salle_info column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderBySalleCours($order = Criteria::ASC) Order by the salle_cours column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByAireGeoInter($order = Criteria::ASC) Order by the aire_geo_inter column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 *
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByRef() Group by the Ref column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByIdinscrit() Group by the idInscrit column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByIdentreprise() Group by the IdEntreprise column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByTypeFormation() Group by the type_formation column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByEmail() Group by the email column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByCoutMoyenJournee() Group by the cout_moyen_journee column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByCollaborationFpt() Group by the collaboration_fpt column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByCollaborationFpe() Group by the collaboration_fpe column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByCentreDocumentation() Group by the centre_documentation column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByServiceReprographie() Group by the service_reprographie column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupBySalleInfo() Group by the salle_info column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupBySalleCours() Group by the salle_cours column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByAireGeoInter() Group by the aire_geo_inter column
 * @method CommonCG76DonneeComplementaireEntrepriseQuery groupByCommentaire() Group by the commentaire column
 *
 * @method CommonCG76DonneeComplementaireEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCG76DonneeComplementaireEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCG76DonneeComplementaireEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCG76DonneeComplementaireEntreprise findOne(PropelPDO $con = null) Return the first CommonCG76DonneeComplementaireEntreprise matching the query
 * @method CommonCG76DonneeComplementaireEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonCG76DonneeComplementaireEntreprise matching the query, or a new CommonCG76DonneeComplementaireEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonCG76DonneeComplementaireEntreprise findOneByIdinscrit(int $idInscrit) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the idInscrit column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByIdentreprise(int $IdEntreprise) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the IdEntreprise column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByTypeFormation(string $type_formation) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the type_formation column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByEmail(string $email) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the email column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByCoutMoyenJournee(string $cout_moyen_journee) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the cout_moyen_journee column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByCollaborationFpt(int $collaboration_fpt) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the collaboration_fpt column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByCollaborationFpe(int $collaboration_fpe) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the collaboration_fpe column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByCentreDocumentation(int $centre_documentation) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the centre_documentation column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByServiceReprographie(int $service_reprographie) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the service_reprographie column
 * @method CommonCG76DonneeComplementaireEntreprise findOneBySalleInfo(int $salle_info) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the salle_info column
 * @method CommonCG76DonneeComplementaireEntreprise findOneBySalleCours(int $salle_cours) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the salle_cours column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByAireGeoInter(string $aire_geo_inter) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the aire_geo_inter column
 * @method CommonCG76DonneeComplementaireEntreprise findOneByCommentaire(string $commentaire) Return the first CommonCG76DonneeComplementaireEntreprise filtered by the commentaire column
 *
 * @method array findByRef(int $Ref) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the Ref column
 * @method array findByIdinscrit(int $idInscrit) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the idInscrit column
 * @method array findByIdentreprise(int $IdEntreprise) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the IdEntreprise column
 * @method array findByTypeFormation(string $type_formation) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the type_formation column
 * @method array findByEmail(string $email) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the email column
 * @method array findByCoutMoyenJournee(string $cout_moyen_journee) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the cout_moyen_journee column
 * @method array findByCollaborationFpt(int $collaboration_fpt) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the collaboration_fpt column
 * @method array findByCollaborationFpe(int $collaboration_fpe) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the collaboration_fpe column
 * @method array findByCentreDocumentation(int $centre_documentation) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the centre_documentation column
 * @method array findByServiceReprographie(int $service_reprographie) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the service_reprographie column
 * @method array findBySalleInfo(int $salle_info) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the salle_info column
 * @method array findBySalleCours(int $salle_cours) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the salle_cours column
 * @method array findByAireGeoInter(string $aire_geo_inter) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the aire_geo_inter column
 * @method array findByCommentaire(string $commentaire) Return CommonCG76DonneeComplementaireEntreprise objects filtered by the commentaire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCG76DonneeComplementaireEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCG76DonneeComplementaireEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCG76DonneeComplementaireEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCG76DonneeComplementaireEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCG76DonneeComplementaireEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCG76DonneeComplementaireEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonCG76DonneeComplementaireEntrepriseQuery();
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
     * @return   CommonCG76DonneeComplementaireEntreprise|CommonCG76DonneeComplementaireEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCG76DonneeComplementaireEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCG76DonneeComplementaireEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRef($key, $con = null)
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
     * @return                 CommonCG76DonneeComplementaireEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Ref`, `idInscrit`, `IdEntreprise`, `type_formation`, `email`, `cout_moyen_journee`, `collaboration_fpt`, `collaboration_fpe`, `centre_documentation`, `service_reprographie`, `salle_info`, `salle_cours`, `aire_geo_inter`, `commentaire` FROM `CG76_Donnee_Complementaire_entreprise` WHERE `Ref` = :p0';
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
            $obj = new CommonCG76DonneeComplementaireEntreprise();
            $obj->hydrate($row);
            CommonCG76DonneeComplementaireEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCG76DonneeComplementaireEntreprise|CommonCG76DonneeComplementaireEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCG76DonneeComplementaireEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByRef(1234); // WHERE Ref = 1234
     * $query->filterByRef(array(12, 34)); // WHERE Ref IN (12, 34)
     * $query->filterByRef(array('min' => 12)); // WHERE Ref >= 12
     * $query->filterByRef(array('max' => 12)); // WHERE Ref <= 12
     * </code>
     *
     * @param     mixed $ref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRef($ref = null, $comparison = null)
    {
        if (is_array($ref)) {
            $useMinMax = false;
            if (isset($ref['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $ref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ref['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $ref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $ref, $comparison);
    }

    /**
     * Filter the query on the idInscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinscrit(1234); // WHERE idInscrit = 1234
     * $query->filterByIdinscrit(array(12, 34)); // WHERE idInscrit IN (12, 34)
     * $query->filterByIdinscrit(array('min' => 12)); // WHERE idInscrit >= 12
     * $query->filterByIdinscrit(array('max' => 12)); // WHERE idInscrit <= 12
     * </code>
     *
     * @param     mixed $idinscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdinscrit($idinscrit = null, $comparison = null)
    {
        if (is_array($idinscrit)) {
            $useMinMax = false;
            if (isset($idinscrit['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT, $idinscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinscrit['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT, $idinscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT, $idinscrit, $comparison);
    }

    /**
     * Filter the query on the IdEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentreprise(1234); // WHERE IdEntreprise = 1234
     * $query->filterByIdentreprise(array(12, 34)); // WHERE IdEntreprise IN (12, 34)
     * $query->filterByIdentreprise(array('min' => 12)); // WHERE IdEntreprise >= 12
     * $query->filterByIdentreprise(array('max' => 12)); // WHERE IdEntreprise <= 12
     * </code>
     *
     * @param     mixed $identreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdentreprise($identreprise = null, $comparison = null)
    {
        if (is_array($identreprise)) {
            $useMinMax = false;
            if (isset($identreprise['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE, $identreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identreprise['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE, $identreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE, $identreprise, $comparison);
    }

    /**
     * Filter the query on the type_formation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeFormation('fooValue');   // WHERE type_formation = 'fooValue'
     * $query->filterByTypeFormation('%fooValue%'); // WHERE type_formation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeFormation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTypeFormation($typeFormation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeFormation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeFormation)) {
                $typeFormation = str_replace('*', '%', $typeFormation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION, $typeFormation, $comparison);
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
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the cout_moyen_journee column
     *
     * Example usage:
     * <code>
     * $query->filterByCoutMoyenJournee('fooValue');   // WHERE cout_moyen_journee = 'fooValue'
     * $query->filterByCoutMoyenJournee('%fooValue%'); // WHERE cout_moyen_journee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coutMoyenJournee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCoutMoyenJournee($coutMoyenJournee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coutMoyenJournee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coutMoyenJournee)) {
                $coutMoyenJournee = str_replace('*', '%', $coutMoyenJournee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE, $coutMoyenJournee, $comparison);
    }

    /**
     * Filter the query on the collaboration_fpt column
     *
     * Example usage:
     * <code>
     * $query->filterByCollaborationFpt(1234); // WHERE collaboration_fpt = 1234
     * $query->filterByCollaborationFpt(array(12, 34)); // WHERE collaboration_fpt IN (12, 34)
     * $query->filterByCollaborationFpt(array('min' => 12)); // WHERE collaboration_fpt >= 12
     * $query->filterByCollaborationFpt(array('max' => 12)); // WHERE collaboration_fpt <= 12
     * </code>
     *
     * @param     mixed $collaborationFpt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCollaborationFpt($collaborationFpt = null, $comparison = null)
    {
        if (is_array($collaborationFpt)) {
            $useMinMax = false;
            if (isset($collaborationFpt['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT, $collaborationFpt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collaborationFpt['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT, $collaborationFpt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT, $collaborationFpt, $comparison);
    }

    /**
     * Filter the query on the collaboration_fpe column
     *
     * Example usage:
     * <code>
     * $query->filterByCollaborationFpe(1234); // WHERE collaboration_fpe = 1234
     * $query->filterByCollaborationFpe(array(12, 34)); // WHERE collaboration_fpe IN (12, 34)
     * $query->filterByCollaborationFpe(array('min' => 12)); // WHERE collaboration_fpe >= 12
     * $query->filterByCollaborationFpe(array('max' => 12)); // WHERE collaboration_fpe <= 12
     * </code>
     *
     * @param     mixed $collaborationFpe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCollaborationFpe($collaborationFpe = null, $comparison = null)
    {
        if (is_array($collaborationFpe)) {
            $useMinMax = false;
            if (isset($collaborationFpe['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE, $collaborationFpe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collaborationFpe['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE, $collaborationFpe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE, $collaborationFpe, $comparison);
    }

    /**
     * Filter the query on the centre_documentation column
     *
     * Example usage:
     * <code>
     * $query->filterByCentreDocumentation(1234); // WHERE centre_documentation = 1234
     * $query->filterByCentreDocumentation(array(12, 34)); // WHERE centre_documentation IN (12, 34)
     * $query->filterByCentreDocumentation(array('min' => 12)); // WHERE centre_documentation >= 12
     * $query->filterByCentreDocumentation(array('max' => 12)); // WHERE centre_documentation <= 12
     * </code>
     *
     * @param     mixed $centreDocumentation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCentreDocumentation($centreDocumentation = null, $comparison = null)
    {
        if (is_array($centreDocumentation)) {
            $useMinMax = false;
            if (isset($centreDocumentation['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION, $centreDocumentation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($centreDocumentation['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION, $centreDocumentation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION, $centreDocumentation, $comparison);
    }

    /**
     * Filter the query on the service_reprographie column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceReprographie(1234); // WHERE service_reprographie = 1234
     * $query->filterByServiceReprographie(array(12, 34)); // WHERE service_reprographie IN (12, 34)
     * $query->filterByServiceReprographie(array('min' => 12)); // WHERE service_reprographie >= 12
     * $query->filterByServiceReprographie(array('max' => 12)); // WHERE service_reprographie <= 12
     * </code>
     *
     * @param     mixed $serviceReprographie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByServiceReprographie($serviceReprographie = null, $comparison = null)
    {
        if (is_array($serviceReprographie)) {
            $useMinMax = false;
            if (isset($serviceReprographie['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE, $serviceReprographie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceReprographie['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE, $serviceReprographie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE, $serviceReprographie, $comparison);
    }

    /**
     * Filter the query on the salle_info column
     *
     * Example usage:
     * <code>
     * $query->filterBySalleInfo(1234); // WHERE salle_info = 1234
     * $query->filterBySalleInfo(array(12, 34)); // WHERE salle_info IN (12, 34)
     * $query->filterBySalleInfo(array('min' => 12)); // WHERE salle_info >= 12
     * $query->filterBySalleInfo(array('max' => 12)); // WHERE salle_info <= 12
     * </code>
     *
     * @param     mixed $salleInfo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterBySalleInfo($salleInfo = null, $comparison = null)
    {
        if (is_array($salleInfo)) {
            $useMinMax = false;
            if (isset($salleInfo['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO, $salleInfo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salleInfo['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO, $salleInfo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO, $salleInfo, $comparison);
    }

    /**
     * Filter the query on the salle_cours column
     *
     * Example usage:
     * <code>
     * $query->filterBySalleCours(1234); // WHERE salle_cours = 1234
     * $query->filterBySalleCours(array(12, 34)); // WHERE salle_cours IN (12, 34)
     * $query->filterBySalleCours(array('min' => 12)); // WHERE salle_cours >= 12
     * $query->filterBySalleCours(array('max' => 12)); // WHERE salle_cours <= 12
     * </code>
     *
     * @param     mixed $salleCours The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterBySalleCours($salleCours = null, $comparison = null)
    {
        if (is_array($salleCours)) {
            $useMinMax = false;
            if (isset($salleCours['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS, $salleCours['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salleCours['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS, $salleCours['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS, $salleCours, $comparison);
    }

    /**
     * Filter the query on the aire_geo_inter column
     *
     * Example usage:
     * <code>
     * $query->filterByAireGeoInter('fooValue');   // WHERE aire_geo_inter = 'fooValue'
     * $query->filterByAireGeoInter('%fooValue%'); // WHERE aire_geo_inter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aireGeoInter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAireGeoInter($aireGeoInter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aireGeoInter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aireGeoInter)) {
                $aireGeoInter = str_replace('*', '%', $aireGeoInter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER, $aireGeoInter, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCG76DonneeComplementaireEntreprise $commonCG76DonneeComplementaireEntreprise Object to remove from the list of results
     *
     * @return CommonCG76DonneeComplementaireEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonCG76DonneeComplementaireEntreprise = null)
    {
        if ($commonCG76DonneeComplementaireEntreprise) {
            $this->addUsingAlias(CommonCG76DonneeComplementaireEntreprisePeer::REF, $commonCG76DonneeComplementaireEntreprise->getRef(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
