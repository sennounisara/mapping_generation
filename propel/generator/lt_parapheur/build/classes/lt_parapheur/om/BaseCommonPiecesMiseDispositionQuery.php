<?php


/**
 * Base class that represents a query for the 'Pieces_Mise_Disposition' table.
 *
 * 
 *
 * @method CommonPiecesMiseDispositionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPiecesMiseDispositionQuery orderByIdTypeDoc($order = Criteria::ASC) Order by the Id_type_doc column
 * @method CommonPiecesMiseDispositionQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method CommonPiecesMiseDispositionQuery orderByIdExterne($order = Criteria::ASC) Order by the id_externe column
 * @method CommonPiecesMiseDispositionQuery orderByOrg($order = Criteria::ASC) Order by the org column
 * @method CommonPiecesMiseDispositionQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonPiecesMiseDispositionQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonPiecesMiseDispositionQuery orderByDateMiseDisposition($order = Criteria::ASC) Order by the Date_mise_disposition column
 * @method CommonPiecesMiseDispositionQuery orderByStatutDisposition($order = Criteria::ASC) Order by the Statut_disposition column
 * @method CommonPiecesMiseDispositionQuery orderByDateRecuperation($order = Criteria::ASC) Order by the Date_recuperation column
 * @method CommonPiecesMiseDispositionQuery orderByStatutRecuperation($order = Criteria::ASC) Order by the Statut_recuperation column
 * @method CommonPiecesMiseDispositionQuery orderByMessage($order = Criteria::ASC) Order by the Message column
 * @method CommonPiecesMiseDispositionQuery orderByIdBlob($order = Criteria::ASC) Order by the Id_blob column
 * @method CommonPiecesMiseDispositionQuery orderByIdDestinataire($order = Criteria::ASC) Order by the Id_destinataire column
 * @method CommonPiecesMiseDispositionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonPiecesMiseDispositionQuery orderByUrlExterne($order = Criteria::ASC) Order by the url_externe column
 *
 * @method CommonPiecesMiseDispositionQuery groupById() Group by the id column
 * @method CommonPiecesMiseDispositionQuery groupByIdTypeDoc() Group by the Id_type_doc column
 * @method CommonPiecesMiseDispositionQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method CommonPiecesMiseDispositionQuery groupByIdExterne() Group by the id_externe column
 * @method CommonPiecesMiseDispositionQuery groupByOrg() Group by the org column
 * @method CommonPiecesMiseDispositionQuery groupByLot() Group by the lot column
 * @method CommonPiecesMiseDispositionQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonPiecesMiseDispositionQuery groupByDateMiseDisposition() Group by the Date_mise_disposition column
 * @method CommonPiecesMiseDispositionQuery groupByStatutDisposition() Group by the Statut_disposition column
 * @method CommonPiecesMiseDispositionQuery groupByDateRecuperation() Group by the Date_recuperation column
 * @method CommonPiecesMiseDispositionQuery groupByStatutRecuperation() Group by the Statut_recuperation column
 * @method CommonPiecesMiseDispositionQuery groupByMessage() Group by the Message column
 * @method CommonPiecesMiseDispositionQuery groupByIdBlob() Group by the Id_blob column
 * @method CommonPiecesMiseDispositionQuery groupByIdDestinataire() Group by the Id_destinataire column
 * @method CommonPiecesMiseDispositionQuery groupByType() Group by the type column
 * @method CommonPiecesMiseDispositionQuery groupByUrlExterne() Group by the url_externe column
 *
 * @method CommonPiecesMiseDispositionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPiecesMiseDispositionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPiecesMiseDispositionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPiecesMiseDisposition findOne(PropelPDO $con = null) Return the first CommonPiecesMiseDisposition matching the query
 * @method CommonPiecesMiseDisposition findOneOrCreate(PropelPDO $con = null) Return the first CommonPiecesMiseDisposition matching the query, or a new CommonPiecesMiseDisposition object populated from the query conditions when no match is found
 *
 * @method CommonPiecesMiseDisposition findOneById(int $id) Return the first CommonPiecesMiseDisposition filtered by the id column
 * @method CommonPiecesMiseDisposition findOneByIdTypeDoc(int $Id_type_doc) Return the first CommonPiecesMiseDisposition filtered by the Id_type_doc column
 * @method CommonPiecesMiseDisposition findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first CommonPiecesMiseDisposition filtered by the id_decision_enveloppe column
 * @method CommonPiecesMiseDisposition findOneByIdExterne(int $id_externe) Return the first CommonPiecesMiseDisposition filtered by the id_externe column
 * @method CommonPiecesMiseDisposition findOneByOrg(string $org) Return the first CommonPiecesMiseDisposition filtered by the org column
 * @method CommonPiecesMiseDisposition findOneByLot(int $lot) Return the first CommonPiecesMiseDisposition filtered by the lot column
 * @method CommonPiecesMiseDisposition findOneByConsultationRef(int $consultation_ref) Return the first CommonPiecesMiseDisposition filtered by the consultation_ref column
 * @method CommonPiecesMiseDisposition findOneByDateMiseDisposition(string $Date_mise_disposition) Return the first CommonPiecesMiseDisposition filtered by the Date_mise_disposition column
 * @method CommonPiecesMiseDisposition findOneByStatutDisposition(int $Statut_disposition) Return the first CommonPiecesMiseDisposition filtered by the Statut_disposition column
 * @method CommonPiecesMiseDisposition findOneByDateRecuperation(string $Date_recuperation) Return the first CommonPiecesMiseDisposition filtered by the Date_recuperation column
 * @method CommonPiecesMiseDisposition findOneByStatutRecuperation(int $Statut_recuperation) Return the first CommonPiecesMiseDisposition filtered by the Statut_recuperation column
 * @method CommonPiecesMiseDisposition findOneByMessage(string $Message) Return the first CommonPiecesMiseDisposition filtered by the Message column
 * @method CommonPiecesMiseDisposition findOneByIdBlob(int $Id_blob) Return the first CommonPiecesMiseDisposition filtered by the Id_blob column
 * @method CommonPiecesMiseDisposition findOneByIdDestinataire(int $Id_destinataire) Return the first CommonPiecesMiseDisposition filtered by the Id_destinataire column
 * @method CommonPiecesMiseDisposition findOneByType(int $type) Return the first CommonPiecesMiseDisposition filtered by the type column
 * @method CommonPiecesMiseDisposition findOneByUrlExterne(string $url_externe) Return the first CommonPiecesMiseDisposition filtered by the url_externe column
 *
 * @method array findById(int $id) Return CommonPiecesMiseDisposition objects filtered by the id column
 * @method array findByIdTypeDoc(int $Id_type_doc) Return CommonPiecesMiseDisposition objects filtered by the Id_type_doc column
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return CommonPiecesMiseDisposition objects filtered by the id_decision_enveloppe column
 * @method array findByIdExterne(int $id_externe) Return CommonPiecesMiseDisposition objects filtered by the id_externe column
 * @method array findByOrg(string $org) Return CommonPiecesMiseDisposition objects filtered by the org column
 * @method array findByLot(int $lot) Return CommonPiecesMiseDisposition objects filtered by the lot column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonPiecesMiseDisposition objects filtered by the consultation_ref column
 * @method array findByDateMiseDisposition(string $Date_mise_disposition) Return CommonPiecesMiseDisposition objects filtered by the Date_mise_disposition column
 * @method array findByStatutDisposition(int $Statut_disposition) Return CommonPiecesMiseDisposition objects filtered by the Statut_disposition column
 * @method array findByDateRecuperation(string $Date_recuperation) Return CommonPiecesMiseDisposition objects filtered by the Date_recuperation column
 * @method array findByStatutRecuperation(int $Statut_recuperation) Return CommonPiecesMiseDisposition objects filtered by the Statut_recuperation column
 * @method array findByMessage(string $Message) Return CommonPiecesMiseDisposition objects filtered by the Message column
 * @method array findByIdBlob(int $Id_blob) Return CommonPiecesMiseDisposition objects filtered by the Id_blob column
 * @method array findByIdDestinataire(int $Id_destinataire) Return CommonPiecesMiseDisposition objects filtered by the Id_destinataire column
 * @method array findByType(int $type) Return CommonPiecesMiseDisposition objects filtered by the type column
 * @method array findByUrlExterne(string $url_externe) Return CommonPiecesMiseDisposition objects filtered by the url_externe column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesMiseDispositionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPiecesMiseDispositionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPiecesMiseDisposition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPiecesMiseDispositionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPiecesMiseDispositionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPiecesMiseDispositionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPiecesMiseDispositionQuery) {
            return $criteria;
        }
        $query = new CommonPiecesMiseDispositionQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $id_decision_enveloppe, $org, $Id_destinataire]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonPiecesMiseDisposition|CommonPiecesMiseDisposition[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPiecesMiseDispositionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPiecesMiseDisposition A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `Id_type_doc`, `id_decision_enveloppe`, `id_externe`, `org`, `lot`, `consultation_ref`, `Date_mise_disposition`, `Statut_disposition`, `Date_recuperation`, `Statut_recuperation`, `Message`, `Id_blob`, `Id_destinataire`, `type`, `url_externe` FROM `Pieces_Mise_Disposition` WHERE `id` = :p0 AND `id_decision_enveloppe` = :p1 AND `org` = :p2 AND `Id_destinataire` = :p3';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);			
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonPiecesMiseDisposition();
            $obj->hydrate($row);
            CommonPiecesMiseDispositionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return CommonPiecesMiseDisposition|CommonPiecesMiseDisposition[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPiecesMiseDisposition[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ORG, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonPiecesMiseDispositionPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonPiecesMiseDispositionPeer::ORG, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Id_type_doc column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeDoc(1234); // WHERE Id_type_doc = 1234
     * $query->filterByIdTypeDoc(array(12, 34)); // WHERE Id_type_doc IN (12, 34)
     * $query->filterByIdTypeDoc(array('min' => 12)); // WHERE Id_type_doc >= 12
     * $query->filterByIdTypeDoc(array('max' => 12)); // WHERE Id_type_doc <= 12
     * </code>
     *
     * @param     mixed $idTypeDoc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdTypeDoc($idTypeDoc = null, $comparison = null)
    {
        if (is_array($idTypeDoc)) {
            $useMinMax = false;
            if (isset($idTypeDoc['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC, $idTypeDoc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeDoc['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC, $idTypeDoc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC, $idTypeDoc, $comparison);
    }

    /**
     * Filter the query on the id_decision_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionEnveloppe(1234); // WHERE id_decision_enveloppe = 1234
     * $query->filterByIdDecisionEnveloppe(array(12, 34)); // WHERE id_decision_enveloppe IN (12, 34)
     * $query->filterByIdDecisionEnveloppe(array('min' => 12)); // WHERE id_decision_enveloppe >= 12
     * $query->filterByIdDecisionEnveloppe(array('max' => 12)); // WHERE id_decision_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idDecisionEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
    }

    /**
     * Filter the query on the id_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE id_externe = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE id_externe IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE id_externe >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE id_externe <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Filter the query on the org column
     *
     * Example usage:
     * <code>
     * $query->filterByOrg('fooValue');   // WHERE org = 'fooValue'
     * $query->filterByOrg('%fooValue%'); // WHERE org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $org The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByOrg($org = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($org)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $org)) {
                $org = str_replace('*', '%', $org);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ORG, $org, $comparison);
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
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::LOT, $lot, $comparison);
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
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the Date_mise_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseDisposition('2011-03-14'); // WHERE Date_mise_disposition = '2011-03-14'
     * $query->filterByDateMiseDisposition('now'); // WHERE Date_mise_disposition = '2011-03-14'
     * $query->filterByDateMiseDisposition(array('max' => 'yesterday')); // WHERE Date_mise_disposition > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMiseDisposition The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByDateMiseDisposition($dateMiseDisposition = null, $comparison = null)
    {
        if (is_array($dateMiseDisposition)) {
            $useMinMax = false;
            if (isset($dateMiseDisposition['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION, $dateMiseDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMiseDisposition['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION, $dateMiseDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION, $dateMiseDisposition, $comparison);
    }

    /**
     * Filter the query on the Statut_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutDisposition(1234); // WHERE Statut_disposition = 1234
     * $query->filterByStatutDisposition(array(12, 34)); // WHERE Statut_disposition IN (12, 34)
     * $query->filterByStatutDisposition(array('min' => 12)); // WHERE Statut_disposition >= 12
     * $query->filterByStatutDisposition(array('max' => 12)); // WHERE Statut_disposition <= 12
     * </code>
     *
     * @param     mixed $statutDisposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByStatutDisposition($statutDisposition = null, $comparison = null)
    {
        if (is_array($statutDisposition)) {
            $useMinMax = false;
            if (isset($statutDisposition['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION, $statutDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutDisposition['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION, $statutDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION, $statutDisposition, $comparison);
    }

    /**
     * Filter the query on the Date_recuperation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRecuperation('2011-03-14'); // WHERE Date_recuperation = '2011-03-14'
     * $query->filterByDateRecuperation('now'); // WHERE Date_recuperation = '2011-03-14'
     * $query->filterByDateRecuperation(array('max' => 'yesterday')); // WHERE Date_recuperation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRecuperation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByDateRecuperation($dateRecuperation = null, $comparison = null)
    {
        if (is_array($dateRecuperation)) {
            $useMinMax = false;
            if (isset($dateRecuperation['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION, $dateRecuperation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRecuperation['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION, $dateRecuperation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION, $dateRecuperation, $comparison);
    }

    /**
     * Filter the query on the Statut_recuperation column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutRecuperation(1234); // WHERE Statut_recuperation = 1234
     * $query->filterByStatutRecuperation(array(12, 34)); // WHERE Statut_recuperation IN (12, 34)
     * $query->filterByStatutRecuperation(array('min' => 12)); // WHERE Statut_recuperation >= 12
     * $query->filterByStatutRecuperation(array('max' => 12)); // WHERE Statut_recuperation <= 12
     * </code>
     *
     * @param     mixed $statutRecuperation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByStatutRecuperation($statutRecuperation = null, $comparison = null)
    {
        if (is_array($statutRecuperation)) {
            $useMinMax = false;
            if (isset($statutRecuperation['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION, $statutRecuperation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutRecuperation['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION, $statutRecuperation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION, $statutRecuperation, $comparison);
    }

    /**
     * Filter the query on the Message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE Message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE Message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the Id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE Id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE Id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE Id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE Id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the Id_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinataire(1234); // WHERE Id_destinataire = 1234
     * $query->filterByIdDestinataire(array(12, 34)); // WHERE Id_destinataire IN (12, 34)
     * $query->filterByIdDestinataire(array('min' => 12)); // WHERE Id_destinataire >= 12
     * $query->filterByIdDestinataire(array('max' => 12)); // WHERE Id_destinataire <= 12
     * </code>
     *
     * @param     mixed $idDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdDestinataire($idDestinataire = null, $comparison = null)
    {
        if (is_array($idDestinataire)) {
            $useMinMax = false;
            if (isset($idDestinataire['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinataire['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type >= 12
     * $query->filterByType(array('max' => 12)); // WHERE type <= 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CommonPiecesMiseDispositionPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the url_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlExterne('fooValue');   // WHERE url_externe = 'fooValue'
     * $query->filterByUrlExterne('%fooValue%'); // WHERE url_externe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByUrlExterne($urlExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlExterne)) {
                $urlExterne = str_replace('*', '%', $urlExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesMiseDispositionPeer::URL_EXTERNE, $urlExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPiecesMiseDisposition $commonPiecesMiseDisposition Object to remove from the list of results
     *
     * @return CommonPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function prune($commonPiecesMiseDisposition = null)
    {
        if ($commonPiecesMiseDisposition) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonPiecesMiseDispositionPeer::ID), $commonPiecesMiseDisposition->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE), $commonPiecesMiseDisposition->getIdDecisionEnveloppe(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonPiecesMiseDispositionPeer::ORG), $commonPiecesMiseDisposition->getOrg(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE), $commonPiecesMiseDisposition->getIdDestinataire(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
